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
        'id_beneficio',
        'uuid'
    ];

    public function beneficio()
    {
        $this->belongsTo(Beneficio::class, 'id_beneficio');
    }

}
