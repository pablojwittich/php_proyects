<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QX extends Model
{
    protected $fillable = 
    [
        'id',
        'qx',
        'estado',
        'inicio',
        'fin',
        'cirujano',
        'anestesista',
        'paciente',
        'practica',
    ];
    public function turnosqx()
    {
        return $this->belongsToMany(Qx::class,);
    }
}