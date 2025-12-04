<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('galeria_home', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');      // Ruta dentro de /public/images
            $table->string('titulo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeria_home');
    }
};
