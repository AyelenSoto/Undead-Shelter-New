<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Intentar login
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Bienvenido.');
        }

        return redirect('/#InicioSesion')->with('error', 'Credenciales incorrectas.');
    }


    public function registrar(Request $request)
    {
        // Validar
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
]);
        $usuario = User::create([
            'nombre' => $request->nombre,
            'email'  => $request->email,
            'password' => Hash::make($request->password),
            'ubicacion' => $request->ubicacion,
]);
        Auth::login($usuario);

        return redirect('/home')->with('success', 'Registro exitoso. ¡Bienvenido!');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión
        $request->session()->invalidate(); // Borra todos los datos de sesión
        $request->session()->regenerateToken(); // Genera un nuevo token CSRF

        return redirect('/')->with('success', 'Has cerrado sesión correctamente.');
    }
        
}
