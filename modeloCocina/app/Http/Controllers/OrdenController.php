<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Cliente;

class OrdenController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $legajo = $request->input('legajo');
        $codigoUnico = $request->input('uuid');
        $benefActivos = $request->input('beneficio');
        
        $clientes = Cliente::select(
        'clientes.id',
        'clientes.nombre',
        'clientes.apellido',
        'clientes.legajo',
        'clientes.uuid',
        'clientes.id_beneficio',
        //Va a la tabla beneficio busca el nombre del beneficio 
        //y lo renombra solo con nombre_beneficio
        'beneficios.nombre_beneficio as nombre_beneficio'
    )
        ->join('beneficios', 'beneficios.id', '=', 'clientes.id_beneficio')
        //Nombre
        ->when($nombre, function ($query) use ($nombre) {
            return $query->where('clientes.nombre', 'like', '%' . $nombre . '%');
        })
        //Apellido
        ->when($apellido, function ($query) use ($apellido) {
            return $query->where('clientes.apellido', 'like', '%' . $apellido . '%');
        })
        //Legajo
        ->when($legajo, function($query) use ($legajo){
            return $query->where('clientes.legajo', 'like', '%' . $legajo .'%' );
        })
        //UUID
        ->when($codigoUnico, function($query) use ($codigoUnico){
            return $query->where('clientes.uuid', 'like', '%' . $codigoUnico . '%');
        })
        //Beneficio
        //->when($benefActivos, function($query) use ($benefActivos){
         //   return $query->where('clientes.beneficio', 'like', '%' . $benefActivos . '%');
        //})
        ->get();

        //Imprime todos los clientes
        return view('index', compact('clientes'));
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

    // Controlador para guardar los nuevos clientes con benenficio
    public function saveCliente(Request $request)
    {
        $codigoUnico = $this->getuuid();
        $saveCliente = new Cliente([
            // El primero, el de la izq corresponde a como se llama el campo en la BD
            // El de la derecha, corresponde al value del formulario
            // campoBD => $request -> input('valueForm')
            'nombre' => $request -> input('nombre'),
            'apellido' => $request -> input('apellido'),
            'legajo' => $request -> input('legajo'),
            'id_beneficio' => $request -> input('tipobeneficio'),
            'uuid' => $codigoUnico
        ]);
        $saveCliente -> save();
        $benefActivos = Beneficio::all();
        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));
        // Como hacer para guardar un cliente con mas de un beneficio
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
    public function getuuid()
    {
        $uuid = uniqid();
        $codigoUnico = substr($uuid,0,6);
        return $codigoUnico;
    }
}
