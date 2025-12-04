<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CentroSalud;

class CentroSaludSeeder extends Seeder
{
    public function run(): void
    {
        CentroSalud::insert([
            [
                'nombre' => 'Hospital Goyeneche',
                'estado' => 'Estable',
                'descripcion' => 'Atención de emergencia y consultas generales',
                'imagen' => 'images/HospitalRegional.jpg',
            ],
            [
                'nombre' => 'ESSALUD Arequipa',
                'estado' => 'Inestable',
                'descripcion' => 'Atención limitada, disponibilidad de camas reducida',
                'imagen' => 'images/EssaludArequipa.jpg',
            ],
            [
                'nombre' => 'Clínica Arequipa',
                'estado' => 'Estable',
                'descripcion' => 'Consultas privadas y suministros básicos',
                'imagen' => 'images/ClinicaArequipa.jpg',
            ],
            [
                'nombre' => 'Hospital Honorio Delgado',
                'estado' => 'Estable',
                'descripcion' => 'Atención de emergencias y especialidades médicas',
                'imagen' => 'images/HospitalHonorio.jpg',
            ],
        ]);
    }
}
