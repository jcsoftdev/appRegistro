<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
            
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');

            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references('id')->on('periodolectivo')->onDelete('cascade');

            $table->enum('asistencia',['PRESENTE','TARDE','FALTA']);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
