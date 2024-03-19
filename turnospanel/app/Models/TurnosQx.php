<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurnosQx extends Model
{
    protected $fillable = [''];

    public function Qx()
    {
        return $this->belongsToMany(Qx::class, );
    }
}