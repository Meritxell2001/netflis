<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Favorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Favorites
        Schema::create('favorites',function(Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('favorites');
    }
}
