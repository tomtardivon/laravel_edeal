<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'name' => 'Pascal',
          'email' => 'pascal@gmail.com',
          'password' => Hash::make('password'),
          'statut' => 'apprenant', 
        ]);
        DB::table('users')->insert([
          'name' => 'Jean',
          'email' => 'jean@gmail.com',
          'password' => Hash::make('password'),
          'statut' => 'formateur',
        
        ]);
      }
}
