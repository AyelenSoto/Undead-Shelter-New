<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GaleriaHomeInicio;

class GaleriaHomeInicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagenes2 = [
            ['imagen2' => 'images/img6.jpg', 'titulo' => 'Imagen 6'],
            ['imagen2' => 'images/img7.jpg', 'titulo' => 'Imagen 7'],
            ['imagen2' => 'images/img8.jpg', 'titulo' => 'Imagen 8'],
            ['imagen2' => 'images/img9.jpg', 'titulo' => 'Imagen 9'],
            ['imagen2' => 'images/img10.jpg', 'titulo' => 'Imagen 10'],
        ];

        foreach ($imagenes2 as $img2) {
            GaleriaHomeInicio::create($img2);
        }
    }
}
