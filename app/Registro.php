<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    protected $table = 'registro';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'TipoIdentificacion'
    ];
}
