<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('staff');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('ramas');

        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('ramas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');
            $table->string('nombre');
            $table->integer('edad');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedBigInteger('rama_id');
            $table->foreign('rama_id')->references('id')->on('ramas');
            $table->text('descripcion');
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
        Schema::dropIfExists('staff');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('ramas');
    }
}
