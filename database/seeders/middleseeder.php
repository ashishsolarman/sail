<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class middleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('middle_header')->insert([
     'position'=>'left',
     'images'=>'kfdjkdf.jpg',

       ]);
    }
}
