<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ChapitresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapitres')->insert([

            [
                'id'=> 1,
                'titre' => 'I',
                'libelle'=> "Signalisation routiès",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 2,
                'titre' => 'II',
                'libelle'=> "Règles de priorité Depassement et croisement",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 3,
                'titre' => 'III',
                'libelle'=> "Arrêt et stationnement Changement de direction Vitesse et manoeuvres",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 4,
                'titre' => 'IV',
                'libelle'=> "Route pour automobile autoroute",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 5,
                'titre' => 'V',
                'libelle'=> "Infractions civisme secourisme",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 6,
                'titre' => 'VI',
                'libelle'=> "Permis de conduire categories A",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 7,
                'titre' => 'VII',
                'libelle'=> "Permis de conduire categories B",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 8,
                'titre' => 'VIII',
                'libelle'=> "Permis de conduire categories C ET C1",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 9,
                'titre' => 'IX',
                'libelle'=> "Permis de conduire categories D",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'id'=> 10,
                'titre' => 'X',
                'libelle'=> "Equipement et entretien documents administratifs",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);

        //
    }
}
