<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MoviesXGendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies_x_genres')->insert([
            ['id_movie' => 1, 'id_genre' => 1],
            ['id_movie' => 2, 'id_genre' => 1],
            ['id_movie' => 3, 'id_genre' => 1],
            ['id_movie' => 4, 'id_genre' => 2],
            ['id_movie' => 5, 'id_genre' => 2],
            ['id_movie' => 6, 'id_genre' => 3],
            ['id_movie' => 7, 'id_genre' => 3],
            ['id_movie' => 8, 'id_genre' => 1],
        ]);
    }
}