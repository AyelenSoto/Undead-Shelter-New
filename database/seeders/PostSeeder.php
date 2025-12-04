<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'titulo' => 'Guía básica de supervivencia ante terremotos',
            'contenido' => 'Aprende qué hacer antes, durante y después de un terremoto. Incluye consejos sobre puntos seguros, mochilas de emergencia y comunicación con familiares.',
            'user_id' => 1,
        ]);

        Post::create([
            'titulo' => 'Cómo preparar una mochila de emergencia completa',
            'contenido' => 'Incluye agua, alimentos no perecibles, linterna, radio, botiquín de primeros auxilios, copias de documentos y ropa. Esta guía te enseña a armarla correctamente.',
            'user_id' => 1,
        ]);

        Post::create([
            'titulo' => 'Supervivencia ante inundaciones',
            'contenido' => 'Consejos para evacuar de manera segura, cortar servicios básicos, proteger objetos importantes y evitar zonas de riesgo durante una inundación.',
            'user_id' => 1,
        ]);

        Post::create([
            'titulo' => 'Qué hacer durante un incendio urbano',
            'contenido' => 'Aprende cómo actuar si hay humo, cómo evacuar correctamente, cómo identificar rutas de escape y qué elementos no deben faltarte en casa.',
            'user_id' => 1,
        ]);

        Post::create([
            'titulo' => 'Preparación para deslizamientos y huaicos',
            'contenido' => 'Identifica señales de alerta, cómo evacuar velozmente y cómo reforzar zonas vulnerables de tu vivienda para evitar daños mayores.',
            'user_id' => 1,
        ]);

        Post::create([
            'titulo' => 'Cómo crear un plan familiar de emergencia',
            'contenido' => 'Define roles, puntos de encuentro, contactos de emergencia y simulacros familiares para estar preparados ante cualquier desastre natural.',
            'user_id' => 1,
        ]);
    }
}
