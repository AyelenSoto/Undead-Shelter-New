<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriaHome; 
use App\Models\Post; 

class HomeController extends Controller
{
    public function index()
    {
        // Trae todas las imágenes del Home
        $imagenes = GaleriaHome::all();
        $posts = Post::where('user_id', 1)->latest()->get();

        // Envía la variable a la vista US-Home
        return view('US-Home', compact('imagenes', 'posts'));
    }
}
