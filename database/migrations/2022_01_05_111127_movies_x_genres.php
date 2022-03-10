<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoviesXGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //MoviesXGenres
        Schema::create('movies_x_genres',function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_movie');
            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_movie')->references('id')->on('movies');
            $table->foreign('id_genre')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_x_genres');
    }
}
