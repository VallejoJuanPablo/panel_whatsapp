<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Numeros extends Model
{
    use  HasFactory,  SoftDeletes;

    protected $fillable = [
        'numero',
        'nombre',
        'apellido',
        'lastname',
        'primer_mensaje',
        'ultimo_mensaje',
        'remitente',
        'disponible',
        'permiso',
       
    ];

}
