<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre', 20)->unique(); 
        });
        DB::table('semestres')->insert(array('id'=>'1','semestre'=>'Primero'));
        DB::table('semestres')->insert(array('id'=>'2','semestre'=>'Segundo'));
        DB::table('semestres')->insert(array('id'=>'3','semestre'=>'Tercero'));
        DB::table('semestres')->insert(array('id'=>'4','semestre'=>'Cuarto'));
        DB::table('semestres')->insert(array('id'=>'5','semestre'=>'Quinto'));
        DB::table('semestres')->insert(array('id'=>'6','semestre'=>'Sexto'));
        DB::table('semestres')->insert(array('id'=>'7','semestre'=>'Septimo'));
        DB::table('semestres')->insert(array('id'=>'8','semestre'=>'Octavo'));
        DB::table('semestres')->insert(array('id'=>'9','semestre'=>'Noveno'));
        DB::table('semestres')->insert(array('id'=>'10','semestre'=>'Decimo'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semestres');
    }
}
