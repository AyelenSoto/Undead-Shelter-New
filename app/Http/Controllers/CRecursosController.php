<?php
namespace App\Http\Controllers;

use App\Models\ResourceStore;

class CRecursosController extends Controller
{
    public function index()
    {
        // Obtener todas las tiendas (centros de recursos)
        $stores = ResourceStore::all();

        return view('US-CRecursos', compact('stores'));
    }
}
