<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 
        'apellido', 
        'legajo',
        'estado',
        'id_beneficio',
        'uuid'
    ];

    public function beneficios()
    {
        return $this->belongsToMany(Beneficio::class, 'cliente_beneficio', 'cliente_id', 'beneficio_id');
    }

}
