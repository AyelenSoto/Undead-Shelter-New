<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceStore extends Model
{
    protected $fillable = [
        'nombre',
        'estado',
        'descripcion',
        'imagen',
        'sobre_tienda',
        'url_destino'
    ];
}