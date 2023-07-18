<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gremios extends Model
{
    protected $table = 'congreso';
    protected $fillable = [
        'id',
        'Nombre',
        'Apellido',
        'Tipo',
        'Correo',
        'RNT',
        'Celular',
        'opcion',
        'asociacion',
        'created_at',
    ];
}
