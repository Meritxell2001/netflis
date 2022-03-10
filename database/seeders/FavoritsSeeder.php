<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FavoritsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            ['idMovie' => 1, 'idUser' => 1],
            ['idMovie' => 2, 'idUser' => 1],
            ['idMovie' => 3, 'idUser' => 1],
            ['idMovie' => 5, 'idUser' => 1],
            ['idMovie' => 1, 'idUser' => 2],
            ['idMovie' => 5, 'idUser' => 2],
            ['idMovie' => 7, 'idUser' => 2],
            ['idMovie' => 8, 'idUser' => 2],
        ]);
    }
}
