<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u=new User();
        $u->name="Isabella Grajales Lopez";
        $u->email="isabella.grajalesl@autonoma.edu.co";
        $u->password=Hash::make('Isabella118003');
        $u->save();

        $u=new User();
        $u->name="Valentina alvarez isaza";
        $u->email="valentina.alvarezi@autonoma.edu.co";
        $u->password=Hash::make('valentina4321');
        $u->save();

        $u=new User();
        $u->name="Sofia Piñiela Mejia";
        $u->email="sofia.pinuelam@autonoma.edu.co";
        $u->password=Hash::make('sof4321a');
        $u->save();




        /*DB::table('users')->insert([
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
        ]);*/

    }
}
