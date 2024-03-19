<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ControllerOrder extends Controller
{
    public function index()
    {
        $sql = 'SELECT T.NUmero AS id, Q.Numero, Q.abreviada AS Descripcion, T.Nombre, CONCAT(DATE_FORMAT(T.HoraInicio,"%H:%i"),';// - ',DATE_FORMAT( T.HoraFin,"%H:%i"))AS HoraInicio,';
        $products = DB::select($sql);
        return $products;
    }
    
        
}