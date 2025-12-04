<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriaHome extends Model
{
    protected $table = 'galeria_home';

    protected $fillable = [
        'imagen',
        'titulo',
    ];
}
