<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPaginas extends Model
{
    use HasFactory;

    protected $table = 'paginas';

    protected $fillable = [
        'nombre_pagina',
        'descripcion_pagina',
        'url_pagina',
        'estado'
    ];
}
