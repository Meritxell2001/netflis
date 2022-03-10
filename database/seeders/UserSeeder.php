<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'dani', 'email' => 'danicoral08@gmail.com','type'=>'client','password' => 'Pepo2','phone' => '+34432546785','sex' => 'man'],
            ['name' => 'mery', 'email' => 'mery@gmail.com','type'=>'client','password' => 'Pepo2','phone' => '+34657896543', 'sex'=> 'woman'],
            ['name' => 'admin1', 'email' => 'admin@gmail.com','type'=>'admin','password' => 'admin1','phone' => null, 'sex' => 'man'],
        ]);
    }
}
