<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ChapitresTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(SujetTableSeeder::class);
         $this->call(QuestionTableSeeder::class);



    }
}
