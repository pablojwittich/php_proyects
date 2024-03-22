<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Cliente;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\URL;

class OrdenController extends Controller
{
    public function index(Request $request)
    {

        // Seccion para la busqueda
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $legajo = $request->input('legajo');
        $codigoUnico = $request->input('uuid');
        $benefActivos = $request->input('beneficio');

        // Accedo a mi clase cliente para crear el filtro
        $clientes = Cliente::select(
            'clientes.id',
            'clientes.nombre',
            'clientes.apellido',
            'clientes.legajo',
            'clientes.uuid'
        )

            ->with('beneficios') // Cargar la relación "beneficios" para evitar N+1 problem
            ->when($nombre, function ($query) use ($nombre) {
                return $query->where('nombre', 'like', '%' . $nombre . '%');
            })
            ->when($apellido, function ($query) use ($apellido) {
                return $query->where('apellido', 'like', '%' . $apellido . '%');
            })
            ->when($legajo, function ($query) use ($legajo) {
                return $query->where('legajo', 'like', '%' . $legajo . '%');
            })
            ->when($codigoUnico, function ($query) use ($codigoUnico) {
                return $query->where('uuid', 'like', '%' . $codigoUnico . '%');
            })
            ->when($benefActivos, function ($query) use ($benefActivos) {
                return $query->whereHas('beneficios', function ($q) use ($benefActivos) {
                    $q->where('nombre_beneficio', 'like', '%' . $benefActivos . '%');
                });
            })
            ->get();


        // Generar el código QR para cada cliente y agregarlo al conjunto de datos
        foreach ($clientes as $cliente) {
            $qrCode = QrCode::size(150)->generate($cliente->id); // Genera el código QR utilizando el UUID del cliente
            $cliente->qrCode = $qrCode; // Agrega el código QR al objeto cliente
    }

        return view('index', compact('clientes', 'qrCode'));
    }
        // Controlador para ver beneficios
    public function viewBeneficio()
    {
        $beneficios = Beneficio::all();
        return view('viewbeneficio', compact('beneficios'));
    }

    // Controlador crear nuevos clientes con beneficio
    public function nuevosClientes()
    {
        $benefActivos = Beneficio::all();
        return view('nuevosClientes', compact('benefActivos'));
    }

    public function saveCliente(Request $request)
    {
        $codigoUnico = $this->getUuid();

        $cliente = new Cliente([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'legajo' => $request->input('legajo'),
            'uuid' => $codigoUnico,
            'estado' => '1'
        ]);

        $cliente->save();

        // Attach beneficios to the client
        $beneficiosSeleccionados = $request->input('beneficios', []); // Obtén los beneficios seleccionados (puede ser un array)

        // Asociar beneficios al cliente
        $cliente->beneficios()->attach($beneficiosSeleccionados);

        $benefActivos = Beneficio::all();

        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));
    }

    //Controlador de nuevos beneficios
    public function nuevosBenef()
    {
        return view('nuevosBenef');
    }

    //Controlador para guardar los nuevos beneficios
    public function saveBenef(Request $request)
    {
        $saveBenef = new Beneficio([
            'nombre_beneficio' => $request -> input('nuevoBenef'),
        ]);
        $saveBenef -> save();
        $benefActivos = Beneficio::all();
        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));
    }

    //Controlador para generar codigo unico para cada cliente
    public function getUuid()
    {
        $uuid = uniqid('', true);
        return $uuid;
    }
    public function viewUser($id)
    {
        $cliente = Cliente::with('beneficios')->findOrFail($id);
        //$codigoQR = $this->genereQr($id);
        $qrCode = QrCode::size(200)->generate($cliente->id);
        return view('viewUser', compact('cliente','qrCode'));

    }

    public function genereQr($id)
    {
        $nuevoQR = Cliente::find($id);
        //$qrCode = QrCode::size(800)->generate($nuevoQR->id);
        return $nuevoQR;
    }
    public function updateClient(Request $request,  $id)
    {
        $cliente = Cliente::findOrFail($id);
        $benefActivos =  Beneficio::all();
        $cliente->update($request->all());
        return back()->with('success', 'Se actualizo con exito')->with('cliente','benefActivos');
    }
   public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $benefActivos =  Beneficio::all();
        return view('editUser', compact('cliente','benefActivos'));
   }
   public function verQr($id)
    {
        $url = URL::route('viewUser', ['id' => $id]); // Obtén la URL de la ruta 'viewUser' con el ID del cliente
        $qrCode = QrCode::size(400)->generate($url); // Genera el código QR con la URL
        return view('verQr', compact('qrCode'));
    }
}
