<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefugiosController extends Controller
{
    public function index()
    {
        return view('US-Refugios');
    }
}
