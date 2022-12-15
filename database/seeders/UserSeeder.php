<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *('name');
        *    $table->string('email')->unique();
         *   $table->timestamp('email_verified_at')->nullable();
          *  $table->string('password');
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=> 'hector',
            'email'=> "hector@hector.com",
            'password'=>Hash::make('hector@hector.com')],
            ['name'=> 'marouane',
            'email'=> "marouane@marouane.com",
            'password'=>Hash::make('marouane@marouane.com')],
            ['name'=> 'Lamia',
            'email'=> "lamia@lamia.com",
            'password'=>Hash::make('Lamia@Lamia.com')],
            ['name'=> 'ramiro',
            'email'=> "ramiro@ramiro.com",
            'password'=>Hash::make('ramiro@ramiro.com')],
            ['name'=> 'Quentin',
            'email'=> "Quentin@Quentin.com",
            'password'=>Hash::make('Quentin@Quentin.com')],
            ['name'=> 'Souliman',
            'email'=> "Souliman@Souliman.com",
            'password'=>Hash::make('Souliman@Souliman.com')],
        ]);
    }
}
