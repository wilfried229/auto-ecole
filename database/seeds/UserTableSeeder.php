<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


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
                'password'=> Hash::make('wilfried'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 2,
                'name' => 'YOUNG',
                'prenom'=> "Worlfried",
                'email'=> "young@gmail.com",
                'password'=> Hash::make('wilfried'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],



        ]);

    }
}
