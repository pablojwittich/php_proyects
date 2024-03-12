<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    // Aca se aplica encapsulamiento porque solo la clase beneficio
    // Puede modificar este campo
    protected $fillable = ['nombre_beneficio',];

    // Aca se define la funcion de uno a muchos -> donde un beneficio puede tener muchos clientes
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'cliente_beneficio', 'beneficio_id', 'cliente_id');
    }
}
