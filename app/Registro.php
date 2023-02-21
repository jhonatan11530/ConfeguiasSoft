<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'AdjuntarFoto',
        'TipoIdentificacion',
        'NumeroIdentificacion',
        'FechaExpedicion',
        'DirreccionResidencia',
        'Departamento',
        'Ciudad',
        'Celular',
        'TelefonoFijo',
        'TarjetaProfesional',
        'AdjuntoTarjetaProfesional',
        'DescripcionPerfil',
        'NGuiaRegistro',
        'DocumentoGuiaRegistro',
        'Terminos',
    ];
}
