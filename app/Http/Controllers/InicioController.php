<?php

namespace App\Http\Controllers;
use App\Models\GaleriaHomeInicio; 
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {   
        $imagenes2 = GaleriaHomeInicio::all();

        return view('US-Inicio', compact('imagenes2')); // tu vista principal
    }
}
