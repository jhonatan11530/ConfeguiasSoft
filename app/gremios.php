<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gremios extends Model
{
    protected $table = 'gremios';
    protected $fillable = [
        'id',
        'asociaciones',
    ];
}
