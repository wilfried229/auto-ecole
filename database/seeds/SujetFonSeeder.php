<?php

use App\Models\sujet_fons;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SujetFonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nbrs = 10;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }



        $nbrs = 8;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 6;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }


        $nbrs = 7;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }

        $nbrs = 2;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }

        $nbrs = 1;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );

        }

        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }


        $nbrs = 8;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujet_fons')->insert(
                [
                    'titre' => "Sujet$n",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }
    }
}
