<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['title' => 'Witcher', 'year' => 2020,'sinopsis' => 'the witcher film of the game','duration' => '2h 30min','type' => 'serie','file'=>'witcher-t1-c1.mp4', 'size'=>'150','cover'=>'witcher.jpg','season' => 1,'chapter' => 1],
            ['title' => 'Witcher', 'year' => 2020,'sinopsis' => 'the witcher film of the game','duration' => '2h 5min','type' => 'serie','file'=>'witcher-t1-c2.mp4', 'size'=>'140','cover'=>'witcher.jpg','season' => 1,'chapter' => 2],
            ['title' => 'Witcher', 'year' => 2020,'sinopsis' => 'the witcher film of the game','duration' => '2h 15min','type' => 'serie','file'=>'witcher-t1-c3.mp4', 'size'=>'150','cover'=>'witcher.jpg','season' => 1,'chapter' => 3],
            ['title' => 'Fast and furious 6', 'year' => 2014,'sinopsis' => 'Fast & Furious 6 (titulada: Fast & Furious 6 en España y Rápidos y Furiosos 6 en Hispanoamérica)   ','duration' => '2h 30min','type' => 'movie','file'=>'fastfurious6.mp4', 'size'=>'120','cover'=>'fastfurious6.jpg','season' => null,'chapter' => null],
            ['title' => 'Fast and furious 7', 'year' => 2015,'sinopsis' => 'Fast & Furious 7 (titulada: Fast & Furious 7 en España y Rápidos y Furiosos 7 en Hispanoamérica).','duration' => '2h 30min','type' => 'movie','file'=>'fastfurious7.mp4', 'size'=>'120','cover'=>'fastfurious7.jpg','season' => null,'chapter' => null],
            ['title' => 'Deadpool 1', 'year' => 2017,'sinopsis' => 'Pelicula de comedia y accion basada en un personaje de un comic creado por marvel.','duration' => '2h','type' => 'movie','file'=>'deadpool1.mp4', 'size'=>'100','cover'=>'deadpool1.jpg','season' => null,'chapter' => null],
            ['title' => 'Deadpool 2', 'year' => 2018,'sinopsis' => 'Pelicula de comedia y accion basada en un personaje de un comic creado por marvel.','duration' => '2h','type' => 'movie','file'=>'deadpool2.mp4', 'size'=>'100','cover'=>'deadpool2.jpg','season' => null,'chapter' => null],
            ['title' => 'Thor Ragnarok', 'year' => 2017,'sinopsis' => 'Pelicula basada en un dios nórdico creada por marvel.','duration' => '2h 15min','type' => 'movie','file'=>'thor-ragnarok.mp4', 'size'=>'110','cover'=>'thor-ragnarok.jpg','season' => null,'chapter' => null],
        ]);
    }
}
