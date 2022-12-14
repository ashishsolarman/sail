<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'role'=>'operator',
      'name'=>'Amitkumar',
      'email'=>'ak@gmail.com',
      'password'=>Hash::make('123456'),
  ],
         [
            'role'=>'uploaded',
      'name'=>'Deepak',
      'email'=>'deepak@gmail.com',
      'password'=>Hash::make('deepak'),
  ],
         [
            'role'=>'intermediator',
      'name'=>'Vishal',
      'email'=>'vishal@gmail.com',
      'password'=>Hash::make('123456'),
  ],
         [
            'role'=>'admin',
      'name'=>'Ashishtomar',
      'email'=>'ashish@gmail.com',
      'password'=>Hash::make('Ashish@1'),
  ],
        ]);
    }
}
