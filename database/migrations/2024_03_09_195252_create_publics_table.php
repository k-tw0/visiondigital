<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('publics', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('ruta_imagen')->nullable(); // Nuevo campo para la ruta de la imagen
            $table->string('titulo');
            $table->string('mini_descripcion');
            $table->text('descripcion');
            $table->text('descripcion2');
            $table->unsignedInteger('visitas')->default(0); // Contador de visitas, empieza en 0
            $table->string('redactor')->nullable(); // Nuevo campo para el redactor, puede ser nulo si no se especifica
            $table->timestamps(); // Agrega esta línea para los campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publics');
    }
}
