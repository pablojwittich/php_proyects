<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Atributos que se tienen que llenar
    protected $fillable =[
        'name',
        'email',
        'username',
        'password',
    ];
    // Metodos que no se serializan
    protected $hidden =[
        'password',
        'remember_token',
    ];
    // Atributos a ser casteados
    protected $casts=[
    'email_verified'=>'datetime',
    ];
    //Muttors -> nos permiten ejecutar funciones que van a hacer alguan
    //con algunos de los atributos. Se tiene que colocar la palabra set y
    //luego el nombre del atributo mas attibute
    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }
}