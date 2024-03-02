<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Cliente;

class OrdenController extends Controller
{
    // Vista tabla clientes
    public function index()
    {
        $clientes = Cliente::all();
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
        $saveCliente = new Cliente([
            // El primero, el de la izq corresponde a como se llama el campo en la BD
            // El de la derecha, corresponde al value del formulario
            // campoBD => $request -> input('valueForm')
            'nombre' => $request -> input('nombre'),
            'apellido' => $request -> input('apellido'),
            'legajo' => $request -> input('legajo'),
            'id_beneficio' => $request -> input('tipobeneficio'),
            'uuid' => 336,
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

    



}
