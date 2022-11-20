<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
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
                'id'=> 1,
                'name' => 'HOUNDJETIN',
                'prenom'=> "wilfried",
                'email'=> "wilfried@gmail.com",
                'role'=> "ADMIN",
                'password'=> Hash::make('wilfried'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 2,
                'name' => 'YOUNG',
                'prenom'=> "Worlfried",
                'email'=> "young@gmail.com",
                'role'=> "ADMIN",
                'password'=> Hash::make('wilfried'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



        ]);

    }
}
