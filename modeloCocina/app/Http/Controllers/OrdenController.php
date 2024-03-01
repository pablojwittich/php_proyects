<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Cliente;

class OrdenController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }

    public function viewBeneficio()
    {
        // tengo que buscar la forma de pasar la cantidad
        // de beneficios a la vista
        $beneficios = Beneficio::all();
        return view('viewbeneficio', compact('beneficios'));
    }

    public function nuevosClientes()
    {

        $benefActivos = Beneficio::all();
        return view('nuevosClientes', compact('benefActivos'));
    }

    public function saveCliente(Request $request)
    {
        $saveCliente = new Cliente([
            // El primero, el de la izq corresponde a como se llama el campo en la BD
            // El de la derecha, corresponde al value del formulario
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'legajo' => $request->input('legajo'),
            'id_beneficio' => $request->input('tipobeneficio'),
            'uuid' => 336,
        ]);

        $saveCliente -> save();

        $benefActivos = Beneficio::all();
        return back()->with('success', 'Operación realizada con éxito')->with(compact('benefActivos'));

    }


}
