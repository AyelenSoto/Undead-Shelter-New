<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resource_stores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('estado'); // estable / inestable
            $table->string('descripcion')->nullable();
            $table->string('imagen'); // ruta imagen
            $table->text('sobre_tienda')->nullable(); // Info detallada
            $table->string('url_destino')->nullable(); // URL del botón
            $table->decimal('lat', 10, 6)->nullable();
            $table->decimal('lng', 10, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource_stores');
    }
};