<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasapoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personasapoderados', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_apoderado')->unsigned();
            $table->foreign('id_apoderado')->references('id')->on('apoderados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personasapoderados');
    }
}
