<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GaleriaHome;

class GaleriaHomeSeeder extends Seeder
{
    public function run(): void
    {
        $imagenes = [
            ['imagen' => 'images/img1.jpg', 'titulo' => 'Imagen 1'],
            ['imagen' => 'images/img2.jpg', 'titulo' => 'Imagen 2'],
            ['imagen' => 'images/img3.jpg', 'titulo' => 'Imagen 3'],
            ['imagen' => 'images/img4.jpg', 'titulo' => 'Imagen 4'],
            ['imagen' => 'images/img5.jpg', 'titulo' => 'Imagen 5'],
        ];

        foreach ($imagenes as $img) {
            GaleriaHome::create($img);
        }
    }
}
