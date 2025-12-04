<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin (idempotente: si existe por email, lo actualiza)
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'nombre' => 'Administrador',
                'password' => Hash::make('Tecsup2025'),
                'ubicacion' => 'Arequipa',
            ]
        );

        // Usuario demo (opcional)
        User::updateOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'nombre' => 'Usuario Demo',
                'password' => Hash::make('Tecsup2025'),
                'ubicacion' => 'Lima',
            ]
        );
    }
}
