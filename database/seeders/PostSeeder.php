<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //primer usuario
        DB::table('posts')->insert([
            'content' => 'Isabella',
            'likes' => 30000 , 
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'content' => 'Valentina',
            'likes' => 30000 , 
            'user_id' => 1
        ]);
        
        //segundo usuario
        DB::table('posts')->insert([
            'content' => 'Juan Manuel',
            'likes' => 75000 , 
            'user_id' => 2
        ]);

        DB::table('posts')->insert([
            'content' => 'Maria José',
            'likes' => 45000 , 
            'user_id' => 2
        ]);

        //usuario 3
        DB::table('posts')->insert([
            'content' => 'Sofia',
            'likes' => 700000 , 
            'user_id' => 3
        ]);

        DB::table('posts')->insert([
            'content' => 'Alejandro',
            'likes' => 500 , 
            'user_id' => 3
        ]);
    }
}

