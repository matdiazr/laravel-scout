<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); // Relación con libros
            $table->foreign('post_id')->references('id')->on('posts'); // clave foranea
            $table->unsignedBigInteger('categoria_id'); // Relación con etiquetas
            $table->foreign('categoria_id')->references('id')->on('categorias'); // clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_post');
    }
}
