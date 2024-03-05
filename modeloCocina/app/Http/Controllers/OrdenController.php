<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Cliente;

class OrdenController extends Controller
{
    // Vista tabla clientes
    public function index(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        
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
        //Aca se hace la busqueda 
        ->when($nombre, function ($query) use ($nombre) {
            return $query->where('clientes.nombre', 'like', '%' . $nombre . '%');
        })
        ->when($apellido, function ($query) use ($apellido) {
            return $query->where('clientes.apellido', 'like', '%' . $apellido . '%');
        })
        ->get();

        return view('index', compact('clientes'));
    }

        
       


    // Vista tabla beneficios
    public function viewBeneficio()
    {
        $beneficios = Beneficio::all();
        return view('viewbeneficio', compact('beneficios'));
    }

    // Vista crear nuevos clientes con beneficio
    public function nuevosClientes()
    {
        $benefActivos = Beneficio::all();
        return view('nuevosClientes', compact('benefActivos'));
    }

    // Funcion para guardar los nuevos clientes con benenficio
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
            // Salta funcion para indicador unico
        ]);
        $saveCliente -> save();
        $benefActivos = Beneficio::all();
        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));
        // Como hacer para guardar un cliente con mas de un beneficio
    }


    public function nuevosBenef()
    {
        return view('nuevosBenef');
    }


    public function saveBenef(Request $request)
    {
        $saveBenef = new Beneficio([
            'nombre_beneficio' => $request -> input('nuevoBenef'),
        ]);
        $saveBenef -> save();
        $benefActivos = Beneficio::all();
        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));

    }

    public function getuuid()
    {
        $uuid = uniqid();
        $codigoUnico = substr($uuid,0,6);
        return $codigoUnico;
    }

    



}
