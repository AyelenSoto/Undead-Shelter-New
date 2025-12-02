<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar el usuario por email
        $admin = User::where('email', 'admin@gmail.com')->first();

        if ($admin) {
            // Si existe, actualizamos los campos
            $admin->nombre = "Administrador";
            $admin->password = bcrypt("Tecsup2025");
            $admin->role = "admin";
            $admin->save();
        } else {
            // Si no existe, lo creamos
            $admin = new User();
            $admin->nombre = "Administrador";
            $admin->email = "admin@gmail.com";   // aquí coincide con la búsqueda
            $admin->password = bcrypt("Tecsup2025");
            $admin->role = "admin";
            $admin->save();
        }
    }
}