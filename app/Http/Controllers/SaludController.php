<?php

namespace App\Http\Controllers;

use App\Models\CentroSalud;

class SaludController extends Controller
{
    public function index()
    {
        $centros = CentroSalud::all();
        return view('US-Salud', compact('centros'));
    }
}