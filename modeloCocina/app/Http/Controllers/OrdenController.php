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

    public function nuevosClientes(){
        return view('nuevosClientes');
    }

}
