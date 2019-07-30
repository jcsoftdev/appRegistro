<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('apellidos');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->enum('rol',['Administrador','Docente','Estudiante']);
            $table->enum('estado',['Activo','Inactivo']);
            $table->enum('tipo_documento',['DNI','RUC','PASAPORTE']);
            $table->string('num_doc');
            $table->date('fech_nac');
            $table->string('celular');
            $table->string('direccion');
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
        Schema::dropIfExists('usuarios');
    }
}
