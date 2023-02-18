<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'usuario',
        'titulo',
        'categoria',
        'documento'
    ];
}
