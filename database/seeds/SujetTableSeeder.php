<?php

use App\Models\Sujets;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;



class SujetTableSeeder extends Seeder
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
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre1",
                    'chapitre_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }



        $nbrs = 8;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre2",
                    'chapitre_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre3",
                    'chapitre_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 6;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre4",
                    'chapitre_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }


        $nbrs = 7;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre5",
                    'chapitre_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }

        $nbrs = 2;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre6",
                    'chapitre_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }

        $nbrs = 1;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre7",
                    'chapitre_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }



        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre8",
                    'chapitre_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );

        }

        $nbrs = 3;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre9",
                    'chapitre_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }


        $nbrs = 8;
        for ($i=0; $i < $nbrs ; $i++) {
            $n = $i+1;
            DB::table('sujets')->insert(
                [
                    'titre' => "Sujet$n-Chapitre10",
                    'chapitre_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]


            );
        }
    }
}
