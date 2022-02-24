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
            'content' => 'Cualquier cosa #1',
            'likes' => 30000 , 
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'content' => 'Cualquier cosa #2',
            'likes' => 30000 , 
            'user_id' => 1
        ]);
        
        //segundo usuario
        DB::table('posts')->insert([
            'content' => 'Cualquier cosa #3',
            'likes' => 75000 , 
            'user_id' => 2
        ]);

        DB::table('posts')->insert([
            'content' => 'Cualquier cosa #4',
            'likes' => 45000 , 
            'user_id' => 2
        ]);

        //usuario 
        DB::table('posts')->insert([
            'content' => 'Cualquier cosa #5',
            'likes' => 700000 , 
            'user_id' => 2
        ]);

        DB::table('posts')->insert([
            'content' => 'Cualquier cosa#6',
            'likes' => 500 , 
            'user_id' => 3
        ]);
    }
}

