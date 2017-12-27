<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name1");
            $table->string("name2");
            $table->string("lastname1");
            $table->string("lastname2");
            $table->string("idnumber");
            $table->date("birthdate");
            $table->char("gender",1);
            $table->integer("cellphone");
            $table->integer("phone");
            $table->longText("address");
            $table->string("studycenter");
            $table->timestamps();
            $table->integer('cityMuni_id')->unsigned();
            $table->foreign('cityMuni_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
