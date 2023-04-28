<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensajes extends Model
{
    use  HasFactory,  SoftDeletes;

    protected $fillable = [
        'origen_id',
        'numero_id',
        'conversacion_id',
        'plantilla',
        'tipo',
        'mensaje',
        'enviado',
        'visto',
        'fecha_mensaje',
        'fecha_visto',
        'codigo',
    ];

}
