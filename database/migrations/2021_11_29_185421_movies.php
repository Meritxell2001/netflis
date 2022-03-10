<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // MOVIES
        Schema::create('movies',function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year');
            $table->string('sinopsis');
            $table->string('duration');
            $table->string('type'); //enum('type',['movie','serie']);
            $table->string('file');
            $table->double('size',9,2);
            $table->string('cover');
            $table->integer('season')->nullable();
            $table->integer('chapter')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
