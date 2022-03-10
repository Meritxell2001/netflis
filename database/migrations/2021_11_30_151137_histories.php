<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Histories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Histories
        Schema::create('histories',function(Blueprint $table) {
            $table->id();// on eloquent cant create compost primary key with idMovies so idHist is
            $table->unsignedBigInteger('idMovie');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idMovie')->references('id')->on('movies');
            $table->foreign('idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
