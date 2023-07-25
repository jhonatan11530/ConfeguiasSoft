<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congreso extends Model
{
    protected $table = 'congreso';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Tipo',
        'Correo',
        'RNT',
        'Celular',
        'opcion',
        'asociacion',
    ];
}
