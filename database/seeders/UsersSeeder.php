<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Isabella Grajales Lopez",
            'email' => "isabella.grajalesl@autonoma.edu.co",
            'password' =>Hash::make('Isabella118003'),
        ]);

        DB::table('users')->insert([
            'name' => "Valentina Alvarez",
            'email' => "valentina.alvarezi@autonoma.edu.co",
            'password' =>Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Maria Garcia ",
            'email' => "mariagarciam@autonoma.edu.co",
            'password' =>Hash::make('hola4321'),
        ]);
        
    }
}
