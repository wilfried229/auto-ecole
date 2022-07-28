<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('questions')->insert([

        [
            'titre' => 'Question n°1',
            'libelle'=> "Quelles sont les différentes signalisations routières ?
            a) La signalisation verticale, horizontale, lumineuse et les signes des agents
            b) Les intersections en X, en Y et en T
            c) Les lignes continues, les lignes discontinues et les lignes mixtes",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q001.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°2',
            'libelle'=> "La signalisation horizontale est :
            a) L'ensemble des marques peintes sur la chaussée
            b) L'ensemble des signes des agents de sécurité
            c) L'ensemble des règles applicables en agglomération",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q002.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°3',
            'libelle'=> "La ligne continue blanche centrale :
            a) Autorise le dépassement
            b) Interdit le dépassement
            c) Est réservée pour l‟arrêt des bus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q003.mp3',
            'extension' => '',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°4',
            'libelle'=> "La ligne discontinue blanche centrale :
            a) Interdit la circulation à droite
            b) Autorise le dépassement
            c) Est réservée pour l‟arrêt des bus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q004.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°5',
            'libelle'=> "Les traits de la ligne discontinue blanche centrale hors agglomération ont une longueur de :
            a) 20m
            b) 1,33m
            c) 3m ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q005.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°6',
            'libelle'=> "La ligne mixte autorise le dépassement :
            a) Si la ligne discontinue est plus proche du conducteur
            b) Si la ligne continue est plus proche du conducteur
            c) Si la chaussée est assez large",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q006.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°7',
            'libelle'=> "La ligne jaune continue sur la bordure du trottoir :
            a) Interdit le stationnement
            b) Autorise l‟arrêt
            c) Indique une zone d‟arrêt de bus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q007.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°8',
            'libelle'=> "L'intervalle entre deux traits d'une ligne discontinue blanche centrale est de :
            a) 10m
            b) 5m
            c) 15m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q008.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°9',
            'libelle'=> "La ligne jaune discontinue sur la bordure du trottoir :
            a) Interdit le stationnement
            b) Autorise l‟arrêt
            c) Indique une zone d‟arrêt de bus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ab',
            'filename' => 'q009.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°10',
            'libelle'=> "La ligne jaune brisée en bordure de la chaussée :
            a) Interdit le dépassement
            b) Autorise le dépassement
            c) Indique une zone d‟arrêt de bus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q010.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°11',
            'libelle'=> "A la vue de la flèche de rabattement, je dois :
            a) M'arrêter
            b) Serrer ma droite
            c) Rétrograder
            d) Dépasser",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q011.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°12',
            'libelle'=> "La circulation sur les bandes d‟arrêt d‟urgence de l‟autoroute est autorisée :
            a) Aux ambulances effectuant un transport urgent de blessés
            b) A tous les véhicules en cas d‟embouteillage
            c) Aux services d‟entretien se rendant sur un lieu d‟intervention
            d) Aux véhicules prioritaires en mission",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'acd',
            'filename' => 'q012.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°13',
            'libelle'=> "La bande rouge discontinue de blanc le long du trottoir, interdit :
            a) L‟arrêt
            b) Le stationnement
            c) L‟arrêt pour les véhicules légers",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q013.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°14',
            'libelle'=> "Sur les lignes hachurées appelées zébras :
            a) Je peux stationner
            b) Je peux circuler
            c) Je ne peux ni stationner, ni circuler, ni m‟arrêter
            d) Je peux m‟arrêter",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q014.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°15',
            'libelle'=> "A la vue du panneau C13
            a) Je suis sur un chemin sans issue.
            b) Je suis prioritaire à la prochaine intersection
            c) Je dois aller tout droit seulement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q015.mp3',
            'extension' => 'mp3',
            'img' => '015.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°16',
            'libelle'=> "A la rencontre du panneau 'STOP' que dois-je faire ?
            a) Je cède le passage à droite
            b) Je cède le passage à droite et à gauche
            c) Je m‟arrête avant le panneau et je cède le passage aux usagers venant de
            ma droite et de ma gauche
            d) Je m‟arrête après le panneau et je cède le passage aux usagers venant de
            ma gauche et de ma droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q016.mp3',
            'extension' => 'mp3',
            'img' => '016.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°17',
            'libelle'=> "Que signifie le panneau A15 c ?
            a) Voie réservée aux chevaux
            b) Endroits fréquentés par les animaux domestiques
            c) Passage de cavaliers.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q017.mp3',
            'extension' => 'mp3',
            'img' => '017.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°18',
            'libelle'=> "Que m‟indique le panneau A19 ?
            a) Chute de grêle
            b) Chute de neige
            c) Risque de chute de pierres sur la chaussée.
            d) Présence de pierres sur la chaussée",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'cd',
            'filename' => 'q018.mp3',
            'extension' => 'mp3',
            'img' => '018.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°19',
            'libelle'=> "Que signifie le panneau A21a ?
            a) Voie réservée aux cyclistes
            b) Débouché de cyclistes ou cyclomotoristes venant de droite ou de
            gauche
            c) Débouché de cyclistes ou de cyclomotoristes venant de droite
            seulement.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q019.mp3',
            'extension' => 'mp3',
            'img' => '019.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°20',
            'libelle'=> "Devant le panneau triangulaire pointe en bas, que dois-je faire ?
            a) Je cède le passage à droite et à gauche
            b) Je cède le passage à droite seulement
            c) Je passe",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q020.mp3',
            'extension' => 'mp3',
            'img' => '020.png',
            'sujet_id' => 1,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°21',
            'libelle'=> "Qu'indique le panneau triangulaire portant une flèche barrée ?
            a) Arrêt obligatoire
            b) Priorité à droite
            c) Priorité à gauche
            d) Priorité de passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q021.mp3',
            'extension' => 'mp3',
            'img' => '021.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°22',
            'libelle'=> "A la vue du panneau AB6 que dois-je faire à la prochaine
            intersection ?
            a) Je m‟arrête
            b) Je cède le passage à droite
            c) Je passe
            d) Je cède le passage à gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q022.mp3',
            'extension' => 'mp3',
            'img' => '022.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°23',
            'libelle'=> "Que m'indique le panneau A1d1 ?
            a) Succession de virage dont le 1 er est à droite à 5 km
            b) Succession de virage sur 5 km dont le 1 er est à gauche
            c) Succession de virage sur 5 km dont le 1 er est à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q023.mp3',
            'extension' => 'mp3',
            'img' => '023.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°24',
            'libelle'=> "Que signifie le panneau A3a1 ?
            a) Chaussée rétrécie par la gauche à 200m
            b) Chaussée rétrécie par la droite sur 200m
            c) Chaussée rétrécie par la gauche sur 200m
            d) Chaussée rétrécie par la droite à 200m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q024.mp3',
            'extension' => 'mp3',
            'img' => '024.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°25',
            'libelle'=> "LA la vue du panneau triangulaire pointe en bas à une intersection, quel
            genre de panneau peuvent rencontrer les usagers venant de gauche et de
            droite ?
            a) Panneau 'STOP'
            b) Panneau losange fond jaune barré
            c) Panneau flèche barrée
            d) Panneau losange fond jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'cd',
            'filename' => 'q025.mp3',
            'extension' => 'mp3',
            'img' => '025.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°26',
            'libelle'=> "En agglomération, les panneaux de danger sont implantés à quelle distance du danger ?
            a) 150m
            b) 200m
            c) 50m
            d) 250m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q026.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°27',
            'libelle'=> "En rase campagne, à quelle distance sont implantés les panneaux de danger ?
            a) 50m
            b) 150m
            c) 200m
            d) 250m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'qO27.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°28',
            'libelle'=> "Que dois-je faire devant un panneau de danger ?
            a) Augmenter ma vitesse
            b) Réduire ma vitesse
            c) Maintenir ma vitesse",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q028.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°29',
            'libelle'=> "Devant un panneau de danger :
            a) Je peux marquer un arrêt
            b) Je peux stationner
            c) Je ne peux ni m‟arrêter ni stationner",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q029.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°30',
            'libelle'=> "Quel danger signale le panneau A21b ?
            a) Voie réservée aux cyclistes
            b) Voie interdite aux cyclistes
            c) Débouché de cyclistes venant de gauche seulement
            d) Débouché de cyclistes venant de gauche ou de droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q030.mp3',
            'extension' => 'mp3',
            'img' => '030.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°31',
            'libelle'=> "Quel danger signale le panneau A20 ?
            a) Débouché sur un pont mobile
            b) Débouché sur un quai ou une berge
            c) Descente dangereuse",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q031.mp3',
            'extension' => 'mp3',
            'img' => '031.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°32',
            'libelle'=> "Quel danger signale le panneau A16 ?
            a) Débouché sur un quai ou une berge
            b) Descente dangereuse
            c) Débouché sur un pont mobile
            d) Débouché sur un quai ou une berge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q032.mp3',
            'extension' => 'mp3',
            'img' => '032.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°33',
            'libelle'=> "Quel danger signale le panneau A6 ?
            a) Descente dangereuse
            b) Débouché sur un pont mobile
            c) Débouché sur un quai ou une berge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q033.mp3',
            'extension' => 'mp3',
            'img' => '033.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°34',
            'libelle'=> "Que signifie le panneau B6a1 ?
            a) Stationnement interdit avant le panneau
            b) Arrêt et stationnement interdits
            c) Stationnement interdit à partir du panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q034.mp3',
            'extension' => 'mp3',
            'img' => '034.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°35',
            'libelle'=> "A la vue du panneau B6a1 :
            a) Je peux m‟arrêter avant ou après le panneau
            b) Je peux stationner après le panneau
            c) Je peux stationner avant le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q035.mp3',
            'extension' => 'mp3',
            'img' => '035.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°36',
            'libelle'=> "A la vue du panneau B6b1
            a) Je peux stationner dans la première rue à droite après le panneau
            b) Je peux stationner dans la rue où se trouve le panneau mais à gauche
            c) Je ne peux stationner nulle part dans la rue où se trouve le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q036.mp3',
            'extension' => 'mp3',
            'img' => '036.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°37',
            'libelle'=> "Le panneau B0
            a) M'interdit de circuler dans les deux sens
            b) M'interdit quelque chose qui sera indiqué après
            c) M‟oblige à faire demi-tour si possible",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q037.mp3',
            'extension' => 'mp3',
            'img' => '037.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°38',
            'libelle'=> "Le panneau B7a :
            a) Interdit aux motocyclistes de dépasser les voitures
            b) Interdit l‟accès aux autos et aux motos
            c) Interdit l‟accès aux deux roues",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q038.mp3',
            'extension' => 'mp3',
            'img' => '038.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°39',
            'libelle'=> "A la vue du panneau B25 :
            a) Je peux rouler à 25km/h
            b) Je peux rouler à 40km/h
            c) Je dois rouler au moins à 30 km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'bc',
            'filename' => 'q039.mp3',
            'extension' => 'mp3',
            'img' => '039.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°40',
            'libelle'=> "Le panneau B21-1 m‟oblige à :
            a) Tourner à droite à la prochaine intersection
            b) Tourner à droite avant le panneau
            c) Tourner à droite après le panneau.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q040.mp3',
            'extension' => 'mp3',
            'img' => '040.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°41',
            'libelle'=> "La balise J4 annonce :
            a) Un virage très dangereux
            b) Une déviation prochaine
            c) Un rétrécissement de la chaussée",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q041.mp3',
            'extension' => 'mp3',
            'img' => '041.png',
            'sujet_id' => 2,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°42',
            'libelle'=> "Sur les bandes et les pistes cyclables
            a) Les automobilistes peuvent s‟arrêter pour prendre un passager
            b) Les piétons peuvent circuler
            c) Les automobilistes peuvent stationner en cas de panne
            d) Rien de tout ce qui précède.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q042.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°43',
            'libelle'=> "Le panneau A25 signifie :
                a) Carrefour à sens giratoire
                b) Terre-plein à contourner par la droite
                c) Céder le passage aux usagers venant de droite
                d) Céder le passage aux usagers venant de gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'abd',
            'filename' => 'q043.mp3',
            'extension' => 'mp3',
            'img' => '043.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°44',
            'libelle'=> "Que signifie le panneau B15 ?
            a) Chaussée à double sens
            b) Céder le passage aux usagers venant en sens inverse
            c) Circulation à sens unique",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q044.mp3',
            'extension' => 'mp3',
            'img' => '044.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°45',
            'libelle'=> "Quel danger signale le panneau A18 ?
            a) Céder le passage aux usagers venant en sens inverse
            b) Circulation dangereuse dans les deux sens
            c) Chaussée rétrécie dans les deux sens",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q045.mp3',
            'extension' => 'mp3',
            'img' => '045.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°46',
            'libelle'=> "A quelle distance du danger est implanté le panneau A18 ?
            a) 150m
            b) 50m
            c) 0m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q046.mp3',
            'extension' => 'mp3',
            'img' => '046.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°47',
            'libelle'=> "A la rencontre du panneau B15, quel panneau l‟usager venant en sens
            inverse aurait rencontré ?
            a) Le panneau 'sens interdit'
            b) Le panneau 'chaussée rétrécie'
            c) Le panneau 'priorité par rapport à la circulation venant en sens
            inverse'",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q047.mp3',
            'extension' => 'mp3',
            'img' => '047.png',
            'sujet_id' => 3,
            'chapitre_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°48',
            'libelle'=> "A la vue du panneau B1, quel panneau l‟usager venant en sens inverse aurait
            rencontré ?
            a) Le panneau 'priorité par rapport à la circulation venant en sens
            inverse'
            b) Le panneau 'céder le passage à la circulation venant en sens inverse'
            c) Le panneau 'circulation à sens unique'",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q048.mp3',
            'extension' => 'mp3',
            'img' => '048.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°49',
            'libelle'=> "Que signifie le panneau B8 ?
            a) Voie réservée aux véhicules de transport de marchandises
            b) Voie réservée aux véhicules de transport en commun de personnes
            c) Accès interdit aux véhicules de transport de marchandises",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q049.mp3',
            'extension' => 'mp3',
            'img' => '048.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°50',
            'libelle'=> "Que signifie le panneau B18a
            a) Accès interdit aux véhicules transportant des produits explosifs ou
            facilement inflammables
            b) Accès interdit aux véhicules transportant des produits de nature à
            polluer les eaux
            c) Accès interdit aux véhicules transportant des matières dangereuses",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q050.mp3',
            'extension' => 'mp3',
            'img' => '050.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°51',
            'libelle'=> "A la vue du panneau A1c, je ralentis
            a) Avant chaque virage
            b) Dans chaque virage
            c) Après chaque virage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q051.mp3',
            'extension' => 'mp3',
            'img' => '051.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°52',
            'libelle'=> "En présence du panneau 'stationnement interdit', je suis autorisé à
            a) Stationner avant le panneau
            b) Stationner après le panneau
            c) Stationner avant la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q052.mp3',
            'extension' => 'mp3',
            'img' => '052.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°53',
            'libelle'=> "Que signifie le panneau B12(1)
            a) Accès interdit à 10km au véhicule dont la hauteur avec ou sans
            chargement dépasse 3,5m
            b) Accès interdit sur 10km au véhicule dont la hauteur avec ou sans
            chargement dépasse 3,5m
            c) Accès interdit au véhicule dont la hauteur avec ou sans
            chargement dépasse 3,5m
            d) Vitesse limitée à 10km/h aux véhicules dont la hauteur avec ou sans chargement dépasse
            3,5m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q053.mp3',
            'extension' => 'mp3',
            'img' => '053.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°54',
            'libelle'=> "Que signifie le panneau B34a
            a) Dépassement interdit aux camions
            b) Fin d‟interdiction de dépasser aux véhicules de transport de
            marchandise dont le PTAC excède 3,5T
            c) Interdiction de dépasser tout véhicule
            d) Fin d‟interdiction de dépasser",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q054.mp3',
            'extension' => 'mp3',
            'img' => '054.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°55',
            'libelle'=> "Que signifie le panneau B45
            a) Accès interdit aux véhicules de transport en commun de
            personnes
            b) Stationnement interdit aux véhicules de transport en commun de
            personnes
            c) Fin de voie réservée aux véhicules de transport en commun de
            personnes
            d) Arrêt interdit aux véhicules de transport en commun de personnes",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q055.mp3',
            'extension' => 'mp3',
            'img' => '055.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°56',
            'libelle'=> "Que signifie le panneau B27
            a) Arrêt d‟autobus
            b) Parking réservé aux autobus
            c) Voie réservée aux véhicules de transport en commun de
            personnes
            d) Arrêt obligatoire aux autobus",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q056.mp3',
            'extension' => 'mp3',
            'img' => '056.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°57',
            'libelle'=> "Que signifie le panneau B9g ?
            a) Accès interdit aux cyclomoteurs
            b) Accès interdit aux motocyclistes
            c) Accès interdit aux cyclomoteurs et aux motocyclistes
            d) Voie réservée aux cyclomoteurs",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q057.mp3',
            'extension' => 'mp3',
            'img' => '057.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°58',
            'libelle'=> "Que signifie le panneau B10a ?
            a) Accès interdit aux véhicules dont la longueur dépasse 10m avec ou
            sans chargement
            b) Accès interdit uniquement aux véhicules de transport de marchandises
            dont la longueur dépasse 10m
            c) Accès interdit uniquement aux véhicules de transport en commun de personnes dont la
            longueur dépasse 10m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q058.mp3',
            'extension' => 'mp3',
            'img' => '058.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°59',
            'libelle'=> "Que signifie le panneau B14(3) ?
            a) Vitesse limitée à 60km/h pour les deux roues
            b) Vitesse limitée à 60km/h pour les cyclomoteurs
            c) Vitesse limitée à 60km/h pour les motocyclettes
            d) Vitesse limitée à 60km/h pour les cyclomoteurs et les
            motocyclettes",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q059.mp3',
            'extension' => 'mp3',
            'img' => '059.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°60',
            'libelle'=> "Le panneau B29(2) :
            a) Ne concerne pas les motocyclettes roulant à moins de 60km/h
            b) Concerne tout véhicule à moteur roulant à moins de 60km/h
            c) Concerne seulement les véhicules automobiles roulant à moins de 60km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q060.mp3',
            'extension' => 'mp3',
            'img' => '060.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°61',
            'libelle'=> "Le panneau B8 interdit l‟accès :
            a) A tout véhicule de transport de marchandises
            b) Aux véhicules de transport de marchandises dont le PTAC est
            supérieur à 3,5T
            c) A tout véhicule de transport",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ab',
            'filename' => 'q061.mp3',
            'extension' => 'mp3',
            'img' => '061.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°62',
            'libelle'=> "Que signifie le panneau B13 ?
            a) Accès interdit aux véhicules pesant 5,5T
            b) Accès interdit aux véhicules pesant plus de 5,5T
            c) Accès interdit aux véhicules pesant moins de 5,5T",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q062.mp3',
            'extension' => 'mp3',
            'img' => '062.png',
            'sujet_id' => 3,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°63',
            'libelle'=> "Le panneau B14(4) concerne
            a) Les véhicules de transport en commun de personnes
            b) Les véhicules de transport de marchandises
            c) Tout véhicule de transport
            d) Tout véhicule de tourisme",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q063.mp3',
            'extension' => 'mp3',
            'img' => '063.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°64',
            'libelle'=> "A la rencontre d‟un panneau de danger, que dois-je faire ?
            a) Accélérer et passer le danger signalé
            b) Ralentir, serrer sa droite et passer en faisant attention au danger
            c) Serrer sa droite, accélérer et passer
            d) Faire demi-tour",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q064.mp3',
            'extension' => 'mp3',
            'img' => '064.PNG',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°65',
            'libelle'=> "A la rencontre du panneau A7, que dois-je faire ?
            a) Accélérer et passer
            b) Ralentir, serrer ma droite et passer avec prudence
            c) Ralentir, serrer ma droite et klaxonner",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q065.mp3',
            'extension' => 'mp3',
            'img' => '065.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°66',
            'libelle'=> "A quoi peut-on s‟attendre à la vue du panneau A7 ?
            a) A voir les rails uniquement
            b) A voir une barrière et des rails
            c) A voir une barrière automatique",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q066.mp3',
            'extension' => 'mp3',
            'img' => '066.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°67',
            'libelle'=> "A quoi peut-on s‟attendre après le panneau A8
            a) A voir des rails et une barrière
            b) A voir un panneau de position uniquement
            c) A voir un panneau de position et des rails",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q067.mp3',
            'extension' => 'mp3',
            'img' => '067.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°68',
            'libelle'=> "Que doit-on faire à la vue du panneau A8
            a) Accélérer et passer en vérifiant la gauche et la droite
            b) Ralentir, regarder à gauche et à droite avant de traverser les rails
            c) Accélérer et passer tout simplement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q068.mp3',
            'extension' => 'mp3',
            'img' => '068.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°69',
            'libelle'=> "Que doit-on faire à la rencontre du panneau A13a ?
            a) Passer en utilisant son avertisseur sonore pour faire dégager les
            enfants qui se trouveraient sur la route
            b) Ralentir, faire attention aux enfants et s‟arrêter au besoin pour les
            laisser passer
            c) Klaxonner et passer rapidement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q069.mp3',
            'extension' => 'mp3',
            'img' => '069.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°70',
            'libelle'=> "A la rencontre du panneau A3, que faire lorsqu‟un véhicule arrive en sens
            inverse ?
            a) S‟arrêter et laisser le véhicule passer
            b) Poursuivre sa route
            c) Serrer sa droite, s‟arrêter et laisser le véhicule passer",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q070.mp3',
            'extension' => 'mp3',
            'img' => '070.png',
            'sujet_id' => 4,
            'chapitre_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°71',
            'libelle'=> "Que peut-on faire à la vue du panneau B1 ?
            a) Poursuivre sa route en ralentissant
            b) Garer son véhicule
            c) Changer de direction
            d) Faire demi-tour",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'bcd',
            'filename' => 'q071.mp3',
            'extension' => 'mp3',
            'img' => '071.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°72',
            'libelle'=> "A la vue du panneau B3 :
            a) Un véhicule peut dépasser un autre véhicule
            b) Une voiture peut dépasser un camion
            c) Un camion peut dépasser un autre camion
            d) Aucun dépassement n‟est autorisé",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q072.mp3',
            'extension' => 'mp3',
            'img' => '072.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°73',
            'libelle'=> "A la rencontre du panneau B3 3, il est interdit
            a) A un véhicule poids lourd, de dépasser une voiture
            b) A un véhicule poids lourd, de dépasser un autre véhicule poids lourd
            c) A un petit véhicule de dépasser un véhicule poids lourd
            d) A un véhicule poids lourd de croiser un véhicule léger",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'ab',
            'filename' => 'q073.mp3',
            'extension' => 'mp3',
            'img' => '073.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°74',
            'libelle'=> "A quelle vitesse peut-on rouler à la vue du panneau B14 ?
            a) A moins de 50km /h
            b) A 50km/h
            c) A plus de 50km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q074.mp3',
            'extension' => 'mp3',
            'img' => '074.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°75',
            'libelle'=> "Que doit-on faire à la vue du panneau B15 ?
            a) Passer sans prendre en compte, l‟usager venant en sens inverse
            b) Passer en serrant sa droite
            c) S‟arrêter pour laisser l‟usager venant en sens inverse",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q075.mp3',
            'extension' => 'mp3',
            'img' => '075.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°76',
            'libelle'=> "Que doit-on faire à la vue du panneau B21c1 ?
            a) Tourner immédiatement à droite
            b) Tourner à droite à la prochaine intersection
            c) Tourner à droite avant le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q076.mp3',
            'extension' => 'mp3',
            'img' => '076.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°77   ',
            'libelle'=> "A quelle vitesse peut-on rouler à la vue du panneau B25 ?
            a) A moins de 30km/h
            b) A la vitesse voulue
            c) A 30km/h
            d) A plus de 30km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'cd',
            'filename' => 'q077.mp3',
            'extension' => 'mp3',
            'img' => '077.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°78',
            'libelle'=> "Que m‟indique le panneau B31 ?
            a) La fin de toutes les intersections sauf le panneau 'STOP'
            b) La fin de tous les panneaux
            c) La fin de tous les panneaux d‟interdiction sauf ceux de
            stationnement et d‟arrêt interdit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q078.mp3',
            'extension' => 'mp3',
            'img' => '078.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°79',
            'libelle'=> "A quelle vitesse peut-on rouler à la vue du panneau B33 ?
            a) A n‟importe quelle vitesse tout en respectant la règlementation en
            vigueur
            b) A moins de 50km/h
            c) A plus de 50km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'abc',
            'filename' => 'q079.mp3',
            'extension' => 'mp3',
            'img' => '079.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°80',
            'libelle'=> "Qu‟indique le panneau B34 ?
            a) Le dépassement est interdit à tous véhicules
            b) Il est mis fin à l‟interdiction de dépasser à tout véhicule
            c) Il est mis fin à l‟interdiction aux petits véhicules seuls de se dépasser",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q080.mp3',
            'extension' => 'mp3',
            'img' => '080.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°81',
            'libelle'=> "Que doit-on faire à la rencontre du panneau G1 ?
            a) Passer les rails très rapidement
            b) Ralentir pour passer les rails
            c) Ralentir, s‟assurer qu‟aucun train n‟arrive ni de droite ni de
            gauche sur les rails avant de passer",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q081.mp3',
            'extension' => 'mp3',
            'img' => '081.png',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°82',
            'libelle'=> "Les feux tricolores s‟allument dans l‟ordre suivant :
            a) Vert-jaune-rouge
            b) Jaune-vert-rouge
            c) Rouge-vert-jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q082.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°83',
            'libelle'=> "Au feu vert :
            a) Je passe sans ralentir
            b) Je ralentis et je passe
            c) Je ralentis et je m‟arrête
            d) Je cède le passage aux usagers venant de droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q083.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°84',
            'libelle'=> "Les feux tricolores s‟allument dans l‟ordre suivant :
            a) Vert-jaune-rouge
            b) Jaune-vert-rouge
            c) Rouge-jaune-vert
            d) Rouge-vert-jaune ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'ad',
            'filename' => 'q084.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°85',
            'libelle'=> "A une intersection munie de feux tricolores dont le rouge est allumé, que faire ?
            a) Je passe si je veux tourner à droite
            b) Je ralentis et je passe si la voie est libre
            c) Je m‟arrête",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q085.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°86',
            'libelle'=> "A une intersection munie de feux tricolore où un agent de sécurité réglemente la circulation, que
            faire ?
            a) Je suis les indications de l‟agent de sécurité
            b) Je respecte les feux
            c) Je passe si le feu est au vert",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q086.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°87',
            'libelle'=> "Dans quel ordre s‟allument les feux tricolores :
            a) Rouge-jaune-vert
            b) Jaune-vert-rouge
            c) Vert-jaune-rouge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q087.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°88',
            'libelle'=> "A une intersection munie de feux tricolores dont le feu vert est allumé, que dois-je faire ?
            a) Je m‟arrête
            b) Je ralentis et je m‟arrête
            c) Je passe avec prudence",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q088.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°89',
            'libelle'=> "Le feu jaune annonce
            a) Le feu vert
            b) Le feu rouge
            c) Le feu orange",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q089.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°90',
            'libelle'=> "A une distance raisonnable du feu orange fixe ; je me prépare
            a) A passer
            b) A m‟arrêter
            c) A céder le passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q090.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°91',
            'libelle'=> "A une intersection munie de feux tricolores où seul le feu jaune clignote :
            a) Je m‟arrête
            b) Je ralentis et je passe
            c) J‟applique la règle de priorité à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q091.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°92',
            'libelle'=> "Aux feux tricolores munis de panneau, dont le jaune seul clignote :
            a) Je me conforme au panneau
            b) Je me conforme au feu jaune clignotant
            c) J‟applique la priorité à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q092.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°93',
            'libelle'=> "Aux feux tricolores dont le rouge est allumé :
            a) Je passe avec prudence
            b) Je m‟arrête
            c) Je ralentis, je serre ma droite et je tourne",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q093.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°94',
            'libelle'=> "Aux feux tricolores fonctionnant normalement et munis de panneau :
            a) Je me conforme au panneau
            b) Je me conforme aux feux
            c) Je passe librement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q094.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°95',
            'libelle'=> "A une intersection munie de feux tricolores où tous les feux sont éteints
            a) Je pratique la règle de la priorité à droite
            b) Je cède le passage à droite et à gauche
            c) J‟ai la priorité de passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q095.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°96',
            'libelle'=> "Quel est le rôle de l‟agent de sécurité à l‟intersection ?
            a) Réglementer la circulation
            b) Perturber la circulation
            c) Contrôler les pièces
            d) Surveiller les passants",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q096.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°97',
            'libelle'=> "Lorsque vous voyez de profil l‟agent réglementant la circulation, que faire ?
            a) Je m‟arrête
            b) Je cède le passage à droite
            c) Je passe
            d) Je ralentis pour céder le passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q097.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°98',
            'libelle'=> "Lorsque je vois de face ou de dos l‟agent réglementant la circulation, que faire ?
            a) Je passe
            b) Je ralentis et je passe
            c) Je m‟arrête
            d) J‟accélère",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q098.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°99',
            'libelle'=> "Quand l‟agent de sécurité réglementant la circulation lève le bras, que faire ?
            a) Je passe si je suis engagé dans l‟intersection
            b) Je ralentis et je passe, si je le vois de face
            c) Je ralentis et je m‟arrête, si je le vois de face",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q099.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°100',
            'libelle'=> "De toutes les signalisations routières, laquelle prime sur les autres ?
            a) La signalisation lumineuse
            b) La signalisation horizontale
            c) La signalisation verticale
            d) Les signes des agents",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q100.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°101',
            'libelle'=> "A la vue de face ou de dos d‟un agent réglementant la circulation :
            a) Je passe
            b) Je m‟arrête
            c) J‟applique la règle de la priorité à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q101.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°102',
            'libelle'=> "A la vue de profil d‟un agent réglementant la circulation :
            a) Je passe
            b) Je m‟arrête
            c) J‟applique la règle de priorité à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q102.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°103',
            'libelle'=> "Le panneau triangle – flèche barrée (AB2) annonce que :
            a) Les usagers venant de gauche et de droite ont la priorité de
            passage
            b) Les usagers arrivant de gauche ou de droite perdent la priorité
            c) Seuls les usagers arrivant de gauche perdent la priorité",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q103.mp3',
            'extension' => 'mp3',
            'img' => '103.png',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°104',
            'libelle'=> "A la vue de la signalisation 'STOP' (AB4), le conducteur doit :
            a) Marquer un arrêt et céder le passage à gauche et à droite
            b) Céder le passage à droite seulement
            c) Marquer l‟arrêt après le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q104.mp3',
            'extension' => 'mp3',
            'img' => '104.png',
            'sujet_id' => 5,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°105',
            'libelle'=> "Que faire à une intersection munie de feux tricolores dont le feu jaune clignote?
            a) Céder le passage à ma gauche
            b) Céder le passage à ma droite
            c) Appliquer la priorité de passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q105.mp3',
            'extension' => 'mp3',
            'img' => '105.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°106',
            'libelle'=> "A la vue du panneau 'STOP' AB4), que dois-je faire ?
            a) Je cède le passage à droite
            b) Je cède le passage à droite et à gauche
            c) Je m‟arrête et je cède le passage aux usagers venant de ma droite et de
            ma gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q106.mp3',
            'extension' => 'mp3',
            'img' => '106.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°107',
            'libelle'=> "A la vue du panneau triangle pointe en bas (AB3a), que dois-je faire ?
            a) Je passe
            b) Je cède le passage à droite seulement
            c) Je cède le passage à droite et à gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q107.mp3',
            'extension' => 'mp3',
            'img' => '107.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°108',
            'libelle'=> "Le panneau B7b :
            a) Interdit le stationnement à tout véhicule à moteur sauf les camions
            b) Interdit l‟accès à tous les véhicules à moteur
            c) Interdit l‟accès à tous les véhicules sauf les camions",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q108.mp3',
            'extension' => 'mp3',
            'img' => '108.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°109',
            'libelle'=> "A la vue du panneau B6d :
            a) Je ne peux pas m‟arrêter
            b) Je ne peux pas m‟arrêter mais je peux stationner
            c) Je ne peux ni m‟arrêter ni stationner",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q109.mp3',
            'extension' => 'mp3',
            'img' => '109.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°110',
            'libelle'=> "Que signifie le panneau B9c ?
            a) Accès interdit aux chevaux
            b) Accès interdit aux véhicules agricoles à moteur
            c) Accès interdit aux véhicules à traction animal",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q110.mp3',
            'extension' => 'mp3',
            'img' => '110.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°111',
            'libelle'=> "A quelle vitesse peut-on rouler à la vue du panneau B43 ?
            a) A 30 km/h
            b) A plus de 30 km/h
            c) A la vitesse réglementaire
            d) A moins de 30 km/h
            e) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            "e" => 'e',
            'reponse' => 'abcd',
            'filename' => 'q111.mp3',
            'extension' => 'mp3',
            'img' => '111.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°112',
            'libelle'=> "A la vue du panneau B43 :
            a) Je respecte une vitesse de 30 km/h obligatoirement
            b) Je peux faire plus de 30 km/h
            c) Je peux faire moins de 30 km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'bc',
            'filename' => 'q112.mp3',
            'extension' => 'mp3',
            'img' => '112.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°113',
            'libelle'=> "Quelles sont les précautions à prendre pour aborder un virage ?
            a) Garder la même vitesse pour vite aborder le virage
            b) Ralentir avant d‟aborder le virage
            c) Rouler au milieu de la chaussée avant d‟atteindre le virage
            d) Bien serrer la droite avant d‟aborder le virage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'bd',
            'filename' => 'q113.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°114',
            'libelle'=> "Que signifie le panneau B2c ?
            a) Interdiction de tourner à gauche
            b) Interdiction de faire marche arrière
            c) Interdiction de faire demi-tour jusqu‟à la prochaine intersection
            d) Interdiction de faire marche arrière jusqu‟à la prochaine intersection
            incluse",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q114.mp3',
            'extension' => 'mp3',
            'img' => '114.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°115',
            'libelle'=> "A la vue du panneau B6a1 :
            a) Je peux stationner avant ou après le panneau
            b) Je peux stationner après le panneau
            c) Je peux stationner avant le panneau
            d) Je ne peux stationner ni avant ni après le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q115.mp3',
            'extension' => 'mp3',
            'img' => '115.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°116',
            'libelle'=> "A la vue du panneau B21b :
            a) Je peux tourner à droite
            b) Je peux tourner à gauche
            c) Je vais tout droit à la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q112.mp3',
            'extension' => 'mp3',
            'img' => '112.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°117',
            'libelle'=> "Que signifie le panneau B43
            a) Stationnement interdit à 30m devant le panneau
            b) Stationnement interdit à 30m après le panneau
            c) Fin de vitesse minimale obligatoire",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q117',
            'extension' => 'mp3',
            'img' => '117.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°118',
            'libelle'=> "Que signifie le panneau C12 ?
            a) Obligation d‟aller tout droit après le panneau
            b) Obligation d‟aller tout droit jusqu‟à la prochaine intersection
            c) Circulation à sens unique",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q118.mp3',
            'extension' => 'mp3',
            'img' => '118.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°119',
            'libelle'=> "Que signifie le panneau A21b ?
            a) Voie réservée au cycliste
            b) Voie interdite au cycliste
            c) Débouché de cycliste venant de gauche seulement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q119.mp3',
            'extension' => 'mp3',
            'img' => '119.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°120',
            'libelle'=> "A la vue du panneau B14 :
            a) Je peux rouler à plus de 50km/h
            b) Je ne peux pas rouler à moins de 50km/h
            c) Je peux rouler à 50km/h strictement
            d) Je ne suis pas concerné pas cette signalisation
            e) Je peux rouler à moins de 50km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'ce',
            'filename' => 'q120.mp3',
            'extension' => 'mp3',
            'img' => '120.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°121',
            'libelle'=> "A la vue du panneau B14 :
            a) Je peux rouler à plus de 50km/h
            b) je peux rouler à moins de 50km/h
            c) Je peux rouler à 50km/h strictement
            d) Je ne suis pas concerner pas cette signalisation",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'bc',
            'filename' => 'q121.mp3',
            'extension' => 'mp3',
            'img' => '121.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°122',
            'libelle'=> "En voiture à la vue du panneau B14 (3) hors agglomération :
            a) Je peux rouler à plus de 60km/h
            b) Je peux rouler à moins de 60km/h
            c) Je peux rouler à 60km/h strictement
            d) Je ne suis pas concerné par cette signalisation",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'abcd',
            'filename' => 'q122.mp3',
            'extension' => 'mp3',
            'img' => '122.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°123',
            'libelle'=> "Quels sont les panneaux qui mettent fin à ce panneau (B3) ?",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'acd',
            'filename' => 'q113.mp3',
            'extension' => 'mp3',
            'img' => '113.png',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°124',
            'libelle'=> "A la vue du panneau indiquant l‟entrée d‟une localité, quelles sont les règles à observer ?
            a) vitesse limitée à 50km/h
            b) perte du caractère prioritaire de la route
            c) usage de l‟avertisseur sonore interdit, sauf cas de danger",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'abc',
            'filename' => 'q124.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°125',
            'libelle'=> "Sur une chaussée à double sens comportant plus de deux voies, les flèches de rabattement peintes
            sur une voie :
            a) me demande de quitter le plus tôt cette voie
            b) m‟annoncent la présence très proche d‟une ligne continue
            c) me demandent de garer sur l‟accotement
            d) me demandent de tourner à droite à la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q125.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°126',
            'libelle'=> "Sur une chaussée à plusieurs voies, des flèches de sélection aussi appelées flèches directionnelles
peuvent jouer les rôles suivants :
a) m‟indiquent la voie que je dois emprunter selon la direction ou je veux aller.je gagne
cette voie dès la première flèche
b) pour tourner, je me place dans la voie comportant des flèches orientées vers la direction
que je veux emprunter
c) pour aller tout droit, je me place dans la voie comportant des flèches droites
d) les voies peuvent comporter des flèches bifides (à deux pointes), donnant le choix entre
deux directions
e) m‟obligeant à m‟arrêter pour chercher la direction dans laquelle je dois aller",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'abcd',
            'filename' => 'q126.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°127',
            'libelle'=> "A la vue du panneau A18-1 :
            a) La circulation est alternée à 150m
            b) La circulation est alternée sur 150m
            c) Circulation à double sens à 150m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q127.mp3',
            'extension' => 'mp3',
            'img' => '127.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°128',
            'libelle'=> "A la vue du panneau B6a1 il est interdit :
            a) de s‟arrêter avant le panneau
            b) de stationner avant le panneau
            c) de s‟arrêter après le panneau
            d) de stationner après le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'd',
            'filename' => 'q128.mp3',
            'extension' => 'mp3',
            'img' => '128.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°129',
            'libelle'=> "Les balises (J3) à anneau rouge :
            a) Indiquent le régime de priorité à appliquer
            b) Précisent la position d‟une intersection
            c) Délimitent la chaussée",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q129.mp3',
            'extension' => 'mp3',
            'img' => '129.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°130',
            'libelle'=> "Cette signalisation indique :
            a) une entrée d‟agglomération
            b) une fin d‟interdiction de klaxonner
            c) une limitation de vitesse
            d) une interdiction de klaxonner",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'acd',
            'filename' => 'q130.mp3',
            'extension' => 'mp3',
            'img' => '130.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°131',
            'libelle'=> "Le panneau (B31) peut mettre fin à une interdiction :
            a) de dépasser
            b) de s‟arrêter
            c) de stationner
            d) de rouler à plus de 70km",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'ad',
            'filename' => 'q131.mp3',
            'extension' => 'mp3',
            'img' => '131.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°132',
            'libelle'=> "A la vue de ce panneau A 1c:
            a) je vais aborder une succession de virage
            b) je dois accélérer pour réduire les effets de la force centrifuge
            c) je dois réduire ma vitesse avant le premier virage pour
            diminuer les effets de la force centrifuge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'ac',
            'filename' => 'q132.mp3',
            'extension' => 'mp3',
            'img' => '132.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°133',
            'libelle'=> "Quelle couleur utilise-t-on pour distinguer la signalisation temporaire de la permanente ?
            a) verte
            b) rouge
            c) jaune
            d) bleue",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q133.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°134',
            'libelle'=> "Les feux bicolores permettent de réglementer :
            a) la circulation par voie
            b) la circulation par véhicule
            c) la circulation par conducteur poids lourds",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q134.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°135',
            'libelle'=> "A la vue du panneau A7-1 je dois rencontrer un passage à niveau équipé de :
            a) deux barrières à fonctionnement manuel
            b) deux demi – barrière à fonctionnement automatique
            c) deux demi – barrière à fonctionnement automatique avec
            feux clignotant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'c',
            'filename' => 'q135.mp3',
            'extension' => 'mp3',
            'img' => '135.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°136',
            'libelle'=> "Le panneau B31 peut signaler la fin :
            a) d‟une route à caractère prioritaire
            b) d‟une limitation de vitesse
            c) d‟une interdiction de stationnement
            d) d‟une interdiction d‟arrêter",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'b',
            'filename' => 'q136.mp3',
            'extension' => 'mp3',
            'img' => '136.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°137',
            'libelle'=> "A la vue du panneau AB2, j‟ai la priorité :
            a) a la prochaine intersection
            b) A toutes les intersections
            c) Seulement avant la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e'=> '',
            'reponse' => 'a',
            'filename' => 'q137.mp3',
            'extension' => 'mp3',
            'img' => '137.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°138',
            'libelle'=> "A la vue du panneau AB7, je peux rencontrer un panneau :
            a) Cédez le passage
            b) Stop
            c) Sens interdit
            d) D‟intersection de routes de même nature",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e'=> '',
            'reponse' => 'abd',
            'filename' => 'q138.mp3',
            'extension' => 'mp3',
            'img' => '138.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°139',
            'libelle'=> "En rase campagne, le panneau AB1 est implanté à quelle distance de l‟intersection ?
            a) 0m
            b) 30m
            c) 50m
            d) 150m
            e) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'd',
            'filename' => 'q139.mp3',
            'extension' => 'mp3',
            'img' => '139.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°140',
            'libelle'=> "En rase campagne, le panneau AB2 est implanté à combien de mètre environ de l‟intersection :
            a) 100 mètres
            b) 50 mètres
            c) 150 mètres
            d) 0 mètres
            e) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'c',
            'filename' => 'q140.mp3',
            'extension' => 'mp3',
            'img' => '140.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°141',
            'libelle'=> "En agglomération, le panneau AB2 est implanté à combien de mètre environ de l‟intersection :
            a) 100 mètres
            b) 50 mètres
            c) 150 mètres
            d) 0 mètre
            e) A proximité de l‟intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'e',
            'filename' => 'q141.mp3',
            'extension' => 'mp3',
            'img' => '141.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°142',
            'libelle'=> "Les feux tricolores permettent de réglementer :
            a- la circulation aux intersections
            b- la circulation par véhicule
            c- la circulation par conducteur de poids lourd",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q142.mp3',
            'extension' => 'mp3',
            'img' => '142.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°143',
            'libelle'=> "A la vue de ce panneau (AK 22), je ralentis car :
            a- je risque de déraper
            b- je risque de projeter des gravillons sur les autres
            véhicules
            c- c‟est un danger permanent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q143.mp3',
            'extension' => 'mp3',
            'img' => '143.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°144',
            'libelle'=> "A la vue de cette signalisation (B5c)
            a- je m‟arrête à la hauteur du panneau
            b- je ralentis et poursuis ma route
            c-je ralentis et je m‟arrête au poste de péage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q144.mp3',
            'extension' => 'mp3',
            'img' => '144.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°145',
            'libelle'=> "A la vue de cette signalisation (B14 et B25) je peux rouler à :
            a- 20km/
            b- 40km/h
            c- 50km/h
            d- 80km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q145.mp3',
            'extension' => 'mp3',
            'img' => '145.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°146',
            'libelle'=> "Ce panneau (B1) indique que :
            a- L‟accès est interdit à tous les véhicules
            b- L‟accès est interdit aux véhicules à moteur
            seulement
            c- La rue en sens inverse est à sens unique",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q146.mp3',
            'extension' => 'mp3',
            'img' => '146.png',
            'sujet_id' => 7,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°147',
            'libelle'=> "Ce panneau (A13b) indique :
            a- un passage pour piétons
            b- l‟obligation aux piétons d‟emprunter la voie
            réservée
            c- un seul passage pour piétons
            d- plusieurs passages aux piétons sur 100m",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'abc',
            'filename' => 'q147.mp3',
            'extension' => 'mp3',
            'img' => '147.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°148',
            'libelle'=> "La signalisation (B26) m‟oblige à mettre les chaines à neige au moins sur
            les deux roues motrices :
            a- oui
            b- non",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q148.mp3',
            'extension' => 'mp3',
            'img' => '148.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°149',
            'libelle'=> "A la vue de ce panneau (B14) la limitation de vitesse concerne :
            a- tous les véhicules
            b- pas tous les véhicules
            c- elle commence à hauteur du panneau
            d- elle commence après le panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q149.mp3',
            'extension' => 'mp3',
            'img' => '149.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°150',
            'libelle'=> "A la vue de ce panneau A15a1,
            a- je peux rencontrer des animaux sauvages
            b- je peux rencontrer des animaux domestiques
            c- je ralentis",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q150.mp3',
            'extension' => 'mp3',
            'img' => '150.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°151',
            'libelle'=> "A la vue de ce panneau A15a1,
            a- je peux rencontrer des animaux sauvages
            b- je peux rencontrer des animaux domestiques
            c- je ralentis",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'abc',
            'filename' => 'q151.mp3',
            'extension' => 'mp3',
            'img' => '151.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°152',
            'libelle'=> "Un panneau triangulaire indique :
            a- un danger
            b- une obligation
            c- une interdiction
            d- une indication",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'c',
            'filename' => 'q151.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°153',
            'libelle'=> "Un panneau rond bleu indique:
            a- une obligation
            b- une interdiction
            c- une fin d‟obligation
            d- une fin d‟interdiction",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q153.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°154',
            'libelle'=> "Un panneau rond rouge est
            a- une obligation
            b- une interdiction
            c- une fin d‟interdiction
            d- une indication",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q154.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°155',
            'libelle'=> "Ce panneau (AK5):
            a- est permanent
            b- est temporaire
            c- impose un ralentissement
            d- n‟impose pas un ralentissement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q155.mp3',
            'extension' => 'mp3',
            'img' => '155.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°156',
            'libelle'=> "Ce panneau (A1d) indique :
            a- deux ou trois virages maximum
            b- plusieurs virages
            c- un virage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q156.mp3',
            'extension' => 'mp3',
            'img' => '156.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°157',
            'libelle'=> "A la vue du panneau B21c2, que faire à la prochaine intersection ?
            a- je peux tourner à gauche
            b- je dois tourner à gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q157.mp3',
            'extension' => 'mp3',
            'img' => '157.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°158',
            'libelle'=> "Avec un panneau rond rouge, l‟interdiction commence :
            a- à hauteur du panneau
            b- à 150m du panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q158.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°159',
            'libelle'=> "Ce panneau (AK5) annonce des travaux :
            a- oui
            b- non
            c- c'est un signal avancé
            d- c'est un signal de position",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q159.mp3',
            'extension' => 'mp3',
            'img' => '159.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°160',
            'libelle'=> "Ce panneau indique :
            a-que le premier virage est à 150m
            b-plusieurs virages à 500m
            c-plusieurs virages sur 500m
            d-Un ralentissement
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bd',
            'filename' => 'q160.mp3',
            'extension' => 'mp3',
            'img' => '160.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°161',
            'libelle'=> "Ce signal annonce :
            a- un danger particulier
            b- la pluie
            c- que je dois ralentir et passer",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q161.mp3',
            'extension' => 'mp3',
            'img' => '161.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°162',
            'libelle'=> "Les panneaux indiquant les itinéraires reliant des villes importantes par la route sont de couleur :
            a- Banche
            b- Verte
            c- Bleue",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q162.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°163',
            'libelle'=> "Les itinéraires de délestage permettent :
            a- D'éviter les bouchons
            b- De faciliter la circulation
            c- D'éviter les contrôles routiers",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q163.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°164',
            'libelle'=> "Les itinéraires de délestages sont
            a- Obligatoires
            b- Facultatifs
            c- Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q164.mp3',
            'extension' => 'mp3',
            'img' => '164.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°165',
            'libelle'=> "Les balises qui positionnent un virage sont",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q165.mp3',
            'extension' => 'mp3',
            'img' => '165.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°166',
            'libelle'=> "On appelle indices « informels », les informations données :
                a- par la signalisation
                b- par l‟environnement en général",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q166.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°167',
            'libelle'=> "Ce panneau B6a1-1 indique que le stationnement est :
            a- Limité à 1h30, payant
            b- Gratuit, à durée limitée
            c- Payant, à durée illimitée
            d- Payant, à durée limitée",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q167.mp3',
            'extension' => 'mp3',
            'img' => '167.png',
            'sujet_id' => 8,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°168',
            'libelle'=> "A cette image Im1 P64, sur la ligne brisée à bord de ce véhicule, je peux :
            a- m‟arrêter
            b- stationner
            c- circuler",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q168.mp3',
            'extension' => 'mp3',
            'img' => '168.PNG',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°169',
            'libelle'=> "Les lignes brisées sur une chaussée servent à :
            a- La circulation des bus
            b- L‟arrêt des bus
            c- Le stationnement des bus
            d- L‟arrêt des camions",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q169.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°170',
            'libelle'=> "Sur cette image Im2 P64, la ligne jaune discontinue en bordure du trottoir :
            a- Interdit l‟arrêt
            b- Autorise l‟arrêt
            c- Interdit le stationnement
            d- Autorise le stationnement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q170.mp3',
            'extension' => 'mp3',
            'img' => '170.PNG',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°171',
            'libelle'=> "Sur cette image Im2 P64 à bord de ce véhicule, je peux
            a- m‟arrêter
            b- stationner
            c- circuler",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q171.mp3',
            'extension' => 'mp3',
            'img' => '171.PNG',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°172',
            'libelle'=> "Sur cette image Im3 P64 à bord de ce véhicule je peux :
            a- avancer à la limite de la ligne transversale
            b- avancer à la limite de la chaussée
            c- Franchir la ligne transversale",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q172.mp3',
            'extension' => 'mp3',
            'img' => '172.PNG',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°173',
            'libelle'=> "Sur cette image Im4 P64 à bord de ce véhicule je peux:
            a- m‟arrêter à la limite de la ligne transversale
            b- franchir la ligne transversale avant de céder le passage
            c- franchir la ligne transversale en l‟absence de tout véhicul",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q173.mp3',
            'extension' => 'mp3',
            'img' => '173.PNG',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°174',
            'libelle'=> "Sur cette image Im4 P64 à bord de ce véhicule, je peux :
            a- m‟arrêter immédiatement
            b- avancer à la limite de la ligne transversale
            c- avancer à la limite de la chaussée abordée
            d- Franchir la ligne transversale",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q174.mp3',
            'extension' => 'mp3',
            'img' => '174.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°175',
            'libelle'=> "En présence d‟un marquage jaune et d‟un marquage blanc, je respecte :
            a- Le marquage jaune
            b- Le marquage blanc",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q175.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°176',
            'libelle'=> "Les lignes de rive sur une route à double sens et sur autoroute sont identiques :
            a- A gauche
            b- A droite
            c- Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q176.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°177',
            'libelle'=> "Un panneau de zone de stationnement placé sur le même support qu‟un panneau d‟entré
            d‟agglomération peut concerner :
            a- Plusieurs rues
            b- Une seule rue
            c- Toutes les rues de l‟agglomération",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q177.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°178',
            'libelle'=> "En présence d‟un panneau stop, je dois :
            a- Marquer l‟arrêt au niveau du panneau
            b- Marquer l‟arrêt au niveau de la ligne
            c- Céder le passage à gauche
            d- Céder le passage à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bcd',
            'filename' => 'q178.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°179',
            'libelle'=> "Ce panneau (B 22a) indique une voie réservée :
            a- aux cycles uniquement
            b- aux cyclistes et cyclomotoristes
            c- à tous les véhicule",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q179.mp3',
            'extension' => 'mp3',
            'img' => '179.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°180',
            'libelle'=> "L'interdiction de tourner à droite concerne :
            a- tous les véhicules
            b- tous les véhicules affectés au transport de
            marchandises de plus de 6T
            c- les véhicules affectés au transport de marchandises
            dont le PTAC est supérieur à 3,5T",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q180.mp3',
            'extension' => 'mp3',
            'img' => '180.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°181',
            'libelle'=> "La limitation de vitesse:
            a- commence à la hauteur du panneau
            b- commence à 150m du panneau
            c- commence à 50m du panneau
            d- concerne tous les véhicules",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q181.mp3',
            'extension' => 'mp3',
            'img' => '181.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°182',
            'libelle'=> "Ce panneau (AK4) indique une chaussée glissante
            a- temporaire
            b- permanente
            c- concerne tous les véhicules
            d- il faut ralentir",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'acd',
            'filename' => 'q182.mp3',
            'extension' => 'mp3',
            'img' => '182.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°183',
            'libelle'=> "La limitation de vitesse:
            a- commence au panneau
            b- commence à 300 mètres
            c- s‟étend sur 300 mètres",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q183.mp3',
            'extension' => 'mp3',
            'img' => '183.png',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°184',
            'libelle'=> "Une voie de la chaussée réservée aux cyclistes ou aux cyclomotoristes est :
            a- une piste cyclable
            b- une bande cyclable",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q184.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°185',
            'libelle'=> "Le franchissement ou le chevauchement d‟une ligne continue :
            a- est autorisé lors d‟un changement de direction
            b- est autorisé pour dépasser un deux – roues
            c- est toujours interdit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q185.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°186',
            'libelle'=> "Lorsque des panneaux accompagnent des feux, je respecte les panneaux si le feu est :
            a- rouge
            b- jaune clignotant
            c- jaune fixe
            d- éteint",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bd',
            'filename' => 'q186.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°187',
            'libelle'=> "L'agent vu de profil peut m‟indiquer :
            a- de passer
            b- de m‟arrêter
            c- d‟accélérer",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'abc',
            'filename' => 'q187.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°188',
            'libelle'=> "Les panneaux qui ont la forme ronde peuvent être des panneaux :
                a- d'obligation
                b- d'indication
                c- d'interdiction
                d- de danger",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q188.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 9,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°189',
            'libelle'=> "Lorsque les panneaux de direction ont un fond jaune, il s‟agit :
            a- d'indication de direction provisoire
            b- d'itinéraires prioritaires
            c- d'indication urgente",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q189.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°190',
            'libelle'=> "Cette signalisation :
            a- impose une limitation de vitesse aux transports de marchandises
            b- interdit accès à tous véhicules
            c- interdit l‟accès aux véhicules de transport de marchandises
            d- impose la limitation de vitesse à tous véhicules",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'cd',
            'filename' => 'q190.mp3',
            'extension' => 'mp3',
            'img' => '190.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°191',
            'libelle'=> "Ce panneau A 18 :
            a- signale une circulation alternée
            b- signale une circulation dans les deux sens
            c- prend effet à 150 mètres environ
            d- prend effet à partir du panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bd',
            'filename' => 'q191.mp3',
            'extension' => 'mp3',
            'img' => '191.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°192',
            'libelle'=> "Le panneau A 13a indique :
            a- la proximité d‟une école
            b- un endroit fréquenté par les enfants
            c- un terrain de jeu
            d- un marché",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'abc',
            'filename' => 'q192.mp3',
            'extension' => 'mp3',
            'img' => '192.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°193',
            'libelle'=> "A la vue du panneau A13b
            a) Je passe derrière le piéton en laissant un intervalle d‟au moins 1m
            b) Je passe devant le piéton qui me voit bien, en laissant un intervalle
            d‟au moins 1m
            c) Je klaxonne pour obliger le piéton à vite traverser
            d) Je m‟arrête pour laisser passer le piéton",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q193.mp3',
            'extension' => 'mp3',
            'img' => '193.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°194',
            'libelle'=> "LA la vue du panneau C12 quel panneau l‟usager venant en sens inverse doit
            voir à l‟autre bout de la chaussée?
            a) Le panneau 'priorité par rapport à la circulation venant en sens inverse'
            b) Le panneau 'céder le passage à la circulation venant en sens inverse'
            c) Le panneau 'sens interdit'",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q194.mp3',
            'extension' => 'mp3',
            'img' => '194.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°195',
            'libelle'=> "Le panneau B7a :
            a) Interdit le stationnement à tout véhicule léger et aux motocyclettes
            b) Interdit l‟accès aux véhicules à moteur à l‟exception des cyclomoteurs
            c) Interdit le stationnement à tout véhicule sauf les motocycles et les
            véhicules légers.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q195.mp3',
            'extension' => 'mp3',
            'img' => '195.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°196',
            'libelle'=> "La bande jaune continue le long du trottoir interdit :
            a) L‟arrêt
            b) Le stationnement
            c) L‟arrêt pour les véhicules légers seulement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q196.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°197',
            'libelle'=> "La bande jaune discontinue le long du trottoir interdit :
            a) L‟arrêt
            b) Le stationnement
            c) L‟arrêt pour les véhicules légers",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q197.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°198',
            'libelle'=> "A la rencontre du panneau 'arrêt et stationnement interdits', l'interdiction finit
            a) Avant le panneau
            b) A partir du panneau
            c) 15 mètres après le panneau
            d) A la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'd',
            'filename' => 'q198.mp3',
            'extension' => 'mp3',
            'img' => '198.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°199',
            'libelle'=> "A la rencontre du panneau 'arrêt et stationnement interdits', l'interdiction
            finit :
            a) Avant la prochaine intersection
            b) A la prochaine intersection
            c) 30 mètres après l‟intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q199.mp3',
            'extension' => 'mp3',
            'img' => '199.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°200',
            'libelle'=> "Le panneau B2b :
            a) Interdit de tourner à gauche à la prochaine intersection
            b) Interdit de tourner à droite à la prochaine intersection
            c) Oblige à tourner à droite à la prochaine intersection
            d) Oblige à tourner à gauche à la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q200.mp3',
            'extension' => 'mp3',
            'img' => '200.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°201',
            'libelle'=> "Le panneau B2a
            a) Interdit de tourner à gauche à la prochaine intersection
            b) Interdit de tourner à gauche dans cette rue
            c) Oblige à tourner à gauche à la prochaine intersection",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q201.mp3',
            'extension' => 'mp3',
            'img' => '201.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°202',
            'libelle'=> "A un feu tricolore, l'apparition de la flèche jaune clignotante, orientée vers la droite autorise les
            véhicules à tourner malgré le feu rouge, dans la voie située immédiatement à droite ; pour cela il
            faut :
            a- se tourner de la file de droite
            b- manœuvrer au ralentir
            c- céder le passage aux piétons
            d- céder le passage aux usagers venant de la gauche et ne pas gêner ceux venant de droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'abcd',
            'filename' => 'q202.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°203',
            'libelle'=> "Une bande sonore sur la chaussée est :
            a- une ligne longitudinale constituée de plots délimitant les voies de circulation
            b- une ligne uniquement réflectorisée
            c- une ligne continue",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q203.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°204',
            'libelle'=> "Les bandes sonores sur la chaussée servent :
            a- à alerter le conducteur qui s‟écarte de sa trajectoire
            b- à rompre la monotonie
            c- à accélérer l‟apparition des signes de fatigue
            d- à sortir le conducteur de se tromper,,",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'abd',
            'filename' => 'q204.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°205',
            'libelle'=> "Ce panneau signale :
            a- une voie de détresse
            b- une rue à sens unique
            c- une voie sans issue
            d- un parc de stationnement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q205.mp3',
            'extension' => 'mp3',
            'img' => '205.png',
            'sujet_id' => 10,
            'chapitre_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        // fin chapitre I

        [
            'titre' => 'Question n°206',
            'libelle'=> "Les véhicules prioritaires sont :
            a) Police – Gendarmerie – corbillards en mission
            b) SAMU – SMUR-Sapeur-pompier – Gendarmerie en mission
            c) SAMU – corbillard – Police",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q206.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°207',
            'libelle'=> "Les feux tricolores fonctionnent, cependant l‟agent de sécurité règlemente la circulation :
            a) Je passe au feu vert
            b) Je ne passe que si je suis autorisé par l‟agent de sécurité
            c) Je passe sans tenir compte ni du feu ni de l‟agent de sécurité",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q207.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°208',
            'libelle'=> "A une intersection munie à la fois de panneau et de feu tricolore fonctionnant normalement :
            a) Je me conforme à la fois au panneau et aux feux
            b) Je ne me conforme ni à l‟un ni à l‟autre
            c) Je me conforme uniquement aux feux",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q208.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°209',
            'libelle'=> "Quelles sont les grandes règles de priorité ?
            a) La règle de courtoisie et le respect des agents de sécurité
            b) Le respect des feux et la règle de priorité à droite
            c) La priorité à droite, la priorité de passage et la perte de priorité",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q209.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°210',
            'libelle'=> "La priorité à droite consiste à :
            a) Passer quand ma droite est libre
            b) Passer quand ma gauche est libre
            c) Serrer ma droite et tourner à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q210.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°211',
            'libelle'=> "Que faire à une intersection sans signalisation ?
            a) Céder le passage à droite
            b) Céder le passage à gauche
            c) Aller tout droit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q211.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°212',
            'libelle'=> "Que faire à une intersection de routes de même nature ?
            a) Céder le passage à droite
            b) Aller tout droit
            c) Céder le passage à droite et à gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q212.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°213',
            'libelle'=> "Les indications des agents de sécurité prévalent sur :
            a) Uniquement les feux tricolores
            b) Toutes signalisations
            c) Les règles de circulation
            d) Les feux de signalisation",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bcd',
            'filename' => 'q213.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°214',
            'libelle'=> "La priorité à droite consiste à :
            a) Céder le passage à tout véhicule venant de gauche comme de droite
            b) Céder le passage uniquement aux véhicules venant de la droite
            c) Ne céder le passage à aucun véhicule",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q206.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°215',
            'libelle'=> "A l‟intersection munie de feux tricolores dont le rouge est allumé, que dois-je faire ?
            a) Je m'arrête
            b) Je passe si je veux tourner à droite
            c) Je ralentis et je passe si la voie est libre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q215.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°216',
            'libelle'=> "A une distance raisonnable du feu jaune fixe, je me prépare à :
            a) Appliquer la règle de priorité à droite
            b) Passer
            c) M‟arrêter
            d) Céder le passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q216.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°217',
            'libelle'=> "Lorsque je vois de face l‟agent de sécurité réglementant la circulation :
            a) Je passe
            b) Je ralentis et je passe
            c) J‟applique la priorité à droite
            d) Je ralentis et je m‟arrête.",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'd',
            'filename' => 'q217.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°218',
            'libelle'=> "A cette intersection I17, quel doit être l'ordre de passage des véhicules ?
            a) Jaune – vert – bleu
            b) Bleu – vert – jaune
            c) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q218.mp3',
            'extension' => 'mp3',
            'img' => '218.PNG',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°219',
            'libelle'=> "Au carrefour à sens giratoire en agglomération :
            a) La priorité est toujours à droite
            b) La priorité peut être donnée à droite et à gauche
            c) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q219.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°220',
            'libelle'=> "A cette intersection I14, quel doit être l‟ordre de passage des véhicules?
            a)
            1. le véhicule bleu démarre, fait 1⁄4 de tour et s‟arrête
            2. le véhicule rouge passe ensuite
            3. le véhicule jaune passe
            4. le véhicule bleu après
            b)
            1. le véhicule bleu démarre, fait 1⁄4 de tour et s‟arrête
            2. le véhicule jaune passe,
            3. le véhicule rouge passe ensuite
            4. le véhicule bleu passe après",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q220.mp3',
            'extension' => 'mp3',
            'img' => '220.PNG',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°221',
            'libelle'=> "A une intersection munie de feux tricolores où un agent de sécurité réglemente la circulation, que
            dois-je faire ?
            a) Je respecte les feux
            b) Je passe si le feu est au vert
            c) Je suis les indications de l'agent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q221.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°222',
            'libelle'=> "A l'intersection d‟une route revêtue et d‟une route en terre, quelle est la règle de priorité à
            observer en agglomération ?
            a) La priorité de passage
            b) La perte de priorité
            c) La priorité à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q222.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°223',
            'libelle'=> "A l'intersection d‟une route revêtue et d‟une route en terre, quelle est la règle de priorité à
            observer hors agglomération par l‟usager circulant sur la route en terre ?
            a) La priorité de passage
            b) La perte de priorité
            c) La priorité à droite
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q223.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°224',
            'libelle'=> "Dans quels cas dois-je céder le passage aux usagers venant de gauche comme de droite ?
            a) Devant le feu rouge
            b) Devant le triangle pointe en bas
            c) Devant le feu vert
            d) Quand je roule sur une route prioritaire",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q224.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°225',
            'libelle'=> "Quel doit être l‟ordre de passage des véhicules à cette intersection I3 ?
            a) Le véhicule rouge, le véhicule jaune et le véhicule bleu
            b) Le véhicule bleu, le véhicule jaune et le véhicule rouge
            c) Les véhicules jaune, rouge et bleu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q225.mp3',
            'extension' => 'mp3',
            'img' => '225.PNG',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°226',
            'libelle'=> "A cette intersection I7 :
            a) Il faut appliquer la règle de la priorité à droite
            b) Il faut appliquer la règle de courtoisie
            c) La voiture jaune doit céder le passage à la rouge
            d) La voiture rouge doit céder le passage à la jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q226.mp3',
            'extension' => 'mp3',
            'img' => '226.PNG',
            'sujet_id' => 1,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°227',
            'libelle'=> "A l‟intersection I9 :
            a) Le véhicule jaune peut tourner immédiatement à droite
            b) Le véhicule jaune peut tourner immédiatement à gauche
            c) Le véhicule jaune peut aller immédiatement tout droit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q227.mp3',
            'extension' => 'mp3',
            'img' => '227.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°228',
            'libelle'=> "A cette intersection I7, en agglomération, le véhicule rouge est sur la chaussée revêtue et le
            véhicule jaune est sur la chaussée en terre, quelle est la règle de priorité à observer ?
            a) La règle de courtoisie
            b) La règle de la priorité à droite
            c) La règle de la perte de priorité
            d) La règle de la priorité de passage",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q228.mp3',
            'extension' => 'mp3',
            'img' => '228.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°229',
            'libelle'=> "A cette intersection I7, hors agglomération, le véhicule rouge est sur la chaussée revêtue et le
            véhicule jaune est sur la chaussée en terre, quelle est la règle de priorité à appliquer ?
            a) La priorité de passage par le véhicule rouge
            b) La perte de priorité par le véhicule jaune
            c) La priorité à droite par les deux véhicules
            d) La règle de courtoisie par les deux véhicules
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q229.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°230',
            'libelle'=> "A cette intersection I8, quel doit être l‟ordre de passage des véhicules ?
            a)
            1. les véhicules, jaune, bleu et la moto passent simultanément
            2. le véhicule rouge passe après
            b)
            1. les véhicules jaune et bleu passent
            2. le véhicule rouge passe
            3. la moto passe après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q230.mp3',
            'extension' => 'mp3',
            'img' => '230.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°231',
            'libelle'=> "A cette intersection I9, qui passera définitivement le premier ?
            a) la moto
            b) le véhicule rouge
            c) le véhicule vert
            d) le véhicule jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q231.mp3',
            'extension' => 'mp3',
            'img' => '231.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°232',
            'libelle'=> "A une intersection de route de même valeur où aucun usager n‟a sa droite libre, s‟applique :
            a) la priorité de passage pour les usagers venant de droite et de gauche
            b) le jeu de courtoisie et ensuite la règle de la priorité à droite
            c) la perte de priorité de passage pour les usagers venant de face",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q232.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°233',
            'libelle'=> "A cette intersection I10, quel doit être l‟ordre de passage des véhicules ?
            a)
            1. la moto
            2. le véhicule jaune ensuite
            3. le véhicule bleu après
            b)
            1. le véhicule jaune
            2. le véhicule bleu ensuite
            3. la moto après",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q233.mp3',
            'extension' => 'mp3',
            'img' => '233.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°234',
            'libelle'=> "A cette intersection I12, quel doit être l‟ordre de passage des véhicules?
            a) le véhicule bleu, le véhicule rouge et le véhicule vert
            b) le véhicule vert démarre, fait 1⁄4 de tour et s‟arrête, le véhicule bleu tourne, le véhicule
            rouge passe et le vert continue
            c) le véhicule rouge avance en suivant le véhicule bleu qui tourne puis le véhicule vert tourne
            après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q234.mp3',
            'extension' => 'mp3',
            'img' => '234.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°235',
            'libelle'=> "A cette intersection I18, quel doit être l‟ordre de passage des véhicules?
            a) - le véhicule orange marque un arrêt
            - les véhicules jaune, rouge et vert passent simultanément
            - le véhicule orange laisse passer les piétons et passera au feu vert.
            b) – les véhicules jaune, rouge et vert passent simultanément
            - le véhicule orange qui a vu la flèche verte tourne à droite
            c) - véhicule orange tourne immédiatement
            - les véhicules jaune, rouge et vert passent simultanément",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q235.mp3',
            'extension' => 'mp3',
            'img' => '235.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°236',
            'libelle'=> "Avant cette intersection I6, quel panneau ont rencontré les véhicules jaune et rouge ?
            a) panneau indiquant l‟intersection d‟une route à grande circulation
            b) panneau indiquant le caractère prioritaire de la route",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q236.mp3',
            'extension' => 'mp3',
            'img' => '236.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°237',
            'libelle'=> "A cette intersection I17, quel sera l‟ordre de passage ?
            a) le véhicule jaune, le véhicule vert et le véhicule bleu
            b) le véhicule bleu, le véhicule vert et le véhicule jaune
            c) le véhicule bleu passe derrière le véhicule jaune et le véhicule vert après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q237.mp3',
            'extension' => 'mp3',
            'img' => '237.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°238',
            'libelle'=> "A cette intersection I22, quel sera l‟ordre de passage ?
            a) Les véhicules jaune et bleu passent simultanément le véhicule rouge laisse passer les
            piétons et tourne à droite
            b) Le véhicule rouge tourne immédiatement à droite et les véhicules jaune et bleu passent
            après
            c) Pendant que les véhicules jaune et bleu passent simultanément, le véhicule rouge tourne à
            droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q238.mp3',
            'extension' => 'mp3',
            'img' => '238.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°239',
            'libelle'=> "Au carrefour à sens giratoire en agglomération :
            a) La priorité est toujours à droite
            b) La priorité est donnée aux véhicules engagés dans le sens giratoire
            c) La priorité peut être donnée à gauche et à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q239.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°240',
            'libelle'=> "Sur cette image PN1, le véhicule bleu doit :
            a) S‟arrêter devant la demi-barrière et attendre le passage du train
            b) Attendre que la demi-barrière s‟élève et que le feu rouge s‟éteigne avant de démarrer
            c) Pouvoir se faufiler entre les demi-barrières pour partir après le passage du train",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q240.mp3',
            'extension' => 'mp3',
            'img' => '240.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°241',
            'libelle'=> "Sur cette image PN3, les véhicules rouge et bleu doivent :
            a) Passer
            b) Attendre devant le premier panneau de signalisation et passer après l‟avion
            c) Attendre devant le deuxième panneau d e signalisation et ne passer qu‟après l‟extinction du
            feu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q241.mp3',
            'extension' => 'mp3',
            'img' => '241.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°242',
            'libelle'=> "Sur cette image PN1, le véhicule jaune se situe à :
            a) 150m environ du passage à niveau
            b) 100m environ du passage à niveau
            c) 50m environ du passage à niveau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q242.mp3',
            'extension' => 'mp3',
            'img' => '242.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°243',
            'libelle'=> "Sur une route où il y a un panneau STOP, l‟arrêt se fait :
            a) Exactement devant le panneau
            b) A la limite de la visibilité en l‟absence de ligne blanche au sol
            c) Si à la ligne blanche, la visibilité est insuffisante, on marque un second arrêt à la limite de
            la chaussée abordée",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q243.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°244',
            'libelle'=> "A cette intersection I11, quel sera l‟ordre de passage ?
            a)
            1- la moto
            2- le véhicule jaune ensuite
            3- le véhicule rouge après
            b)
            1- le véhicule jaune
            2- le véhicule rouge ensuite
            3- la moto après",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q244.mp3',
            'extension' => 'mp3',
            'img' => '244.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°245',
            'libelle'=> "A cette intersection I12, quel est le véhicule qui passera définitivement le premier ?
            a) le véhicule rouge
            b) le véhicule bleu
            c) le véhicule vert",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q245.mp3',
            'extension' => 'mp3',
            'img' => '245.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°246',
            'libelle'=> "A cette intersection I24, quel sera l‟ordre de passage ?
            a) 1- le véhicule bleu
            2- le véhicule rouge ensuite
            3- le véhicule vert après
            b) 1- le véhicule vert
            2- le véhicule bleu ensuite
            3- le véhicule rouge après",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q246.mp3',
            'extension' => 'mp3',
            'img' => '246.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°247',
            'libelle'=> "A cette intersection I26, quel est le véhicule qui passera le premier ?
            a) Le véhicule vert
            b) Le véhicule Jaune
            c) Le véhicule Rouge
            d) Le véhicule bleu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q247.mp3',
            'extension' => 'mp3',
            'img' => '247.PNG',
            'sujet_id' => 2,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°248',
            'libelle'=> "Quel panneau verra le véhicule jaune à cette intersection I3 ?
            a) Panneau d‟intersection de deux routes de même nature
            b) Panneau indiquant le caractère prioritaire d‟une route
            c) Aucun panneau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q248.mp3',
            'extension' => 'mp3',
            'img' => '248.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

       [
            'titre' => 'Question n°249',
            'libelle'=> "A cette intersection I14, quel est le véhicule qui passera définitivement le premier ?
            a) Le véhicule bleu
            b) Le véhicule Rouge
            c) Le véhicule jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q249.mp3',
            'extension' => 'mp3',
            'img' => '249.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°250',
            'libelle'=> "A cette intersection I1, quel est l‟ordre de passage ?
            a) 1- Le véhicule jaune
            2- Le véhicule rouge
            3- Le véhicule vert
            b) 1- Le véhicule rouge
            2- Les véhicules jaune et vert ensuite",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q250.mp3',
            'extension' => 'mp3',
            'img' => '250.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°251',
            'libelle'=> "A cette intersection I5, quel sera l‟ordre de passage ?
            a) 1-le véhicule vert marque un arrêt
            2- les véhicules rouge et jaune passent ensuite
            3- enfin le véhicule vert passe
            b) 1- le véhicule rouge passe
            2- le véhicule vert passe
            3- le véhicule jaune passe après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q251.mp3',
            'extension' => 'mp3',
            'img' => '251.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°252',
            'libelle'=> "A cette intersection I14, quel sera l‟ordre de passage ?
            a) 1- le véhicule bleu passe
            2- le véhicule jaune passe ensuite
            3- Enfin le véhicule rouge passe
            b)
            1-le véhicule bleu démarre, fait un quart de tour et s‟arrête
            2- le véhicule rouge passe
            3- le véhicule bleu passe ensuite
            4- enfin le véhicule jaune passe
            c) 1- le véhicule bleu démarre fait un quart de tour et s‟arrête
            2- le véhicule jaune passe
            3- le véhicule rouge passe ensuite
            4 – enfin le véhicule bleu passe",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q252.mp3',
            'extension' => 'mp3',
            'img' => '252.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°253',
            'libelle'=> "A cette intersection I23, quel sera l‟ordre de passage ?
            a) 1- les véhicules vert et rouge passent
            2- les véhicules jaune et bleu passent après
            b) 1- les véhicules jaune et bleu s‟arrêtent
            2-les véhicules vert et rouge passent
            3- le véhicule bleu tourne
            c) 1- le véhicule bleu tourne
            2- les véhicules vert et rouge passent
            3- le véhicule jaune passe au feu vert",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q253.mp3',
            'extension' => 'mp3',
            'img' => '253.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°254',
            'libelle'=> "A cette intersection I 26, quel sera l‟ordre de passage ?
            a) 1- les véhicules jaune et vert passent
            2- le véhicule bleu et le véhicule rouge marque un arrêt
            b) 1- les véhicules jaune, bleu et vert marquent un arrêt
            2- le véhicule rouge passe
            3- les véhicules qui auront le feu vert passeront après le véhicule rouge",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q254.mp3',
            'extension' => 'mp3',
            'img' => '254.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°255',
            'libelle'=> "Quel panneau le conducteur du véhicule vert peut rencontrer à cette intersection I15 ?
            a) Panneau d‟intersection de deux routes de même nature
            b) Panneau d‟intersection d‟une route à grande circulation et d‟une route secondaire
            c) Panneau indiquant le caractère prioritaire d‟une route
            d) Panneau indiquant la fin du caractère prioritaire d‟une route",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q255.mp3',
            'extension' => 'mp3',
            'img' => '255.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°256',
            'libelle'=> "A cette intersection I23, quel est le véhicule qui passera le dernier ?
            a) Le véhicule jaune
            b) Le véhicule Bleu
            c) Les véhicules Jaune et bleu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q256.mp3',
            'extension' => 'mp3',
            'img' => '256.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°257',
            'libelle'=> "A cette intersection I20, quel est le véhicule qui peut passer immédiatement ?
            a) Le véhicule jaune
            b) Le véhicule vert qui a sa droite libre
            c) Aucun véhicule
            d) Les véhicules vert et jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q257.mp3',
            'extension' => 'mp3',
            'img' => '257.PNG',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°258',
            'libelle'=> "Que doit faire un conducteur qui est sur le point d‟être dépassé ?
            a) Il serre sa gauche sans accélérer
            b) Il serre sa droite en accélérant
            c) Il serre sa droite sans accélérer
            d) Il reste au milieu de la chaussée en accélérant
            e) Il serre sa droite en ralentissant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'c',
            'filename' => 'q258.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°259.mp3',
            'libelle'=> "Dans quels cas est-il interdit de dépasser ?
            a) Lorsque je gène un usager venant de derrière
            b) Lorsque je suis au sommet d‟une côte où dans un virage
            c) Lorsque je suis en présence d‟un panneau d‟interdiction de dépasser
            d) Lorsque je suis sur le point d‟être dépassé",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bde',
            'filename' => 'q259',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°260',
            'libelle'=> "La nuit, pour dépasser,
            a) J‟utilise mes avertisseurs sonores
            b) J‟utilise mes avertisseurs lumineux
            c) Je ne fais rien de tout cela",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q260.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°261',
            'libelle'=> "Lorsque la ligne discontinue de la ligne mixte est plus proche du conducteur, on peut franchir cette
            ligne :
            a) Pour tourner à droite
            b) Pour tourner à gauche
            c) Pour dépasser puis se rabattre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q261.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°262',
            'libelle'=> "Quelle est la toute première précaution à observer pour effectuer un dépassement ?
            a) S‟assurer que l‟on n‟est pas dans un cas d‟interdiction
            b) Accélérer pour dépasser
            c) Bien serrer sa droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q262.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°263',
            'libelle'=> "En général, de quel côté s‟effectue le dépassement ?
            a) Par la droite
            b) Par la gauche
            c) Du côté de votre choix
            d) Du côté où c‟est possible",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q263.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°264',
            'libelle'=> "Dans quel cas peut-on être autorisé, à dépasser par la droite ?
            a) Quand on a une file ininterrompue de véhicules devant soi
            b) Quand le véhicule à dépasser a déjà pris position pour tourner à gauche
            c) En abordant une intersection
            d) Sur une chaussée à sens unique",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q264.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°265',
            'libelle'=> " Quand est-ce que le dépassement est effectif ?
            a) Quand l‟usager dépassé apparaît dans le rétroviseur intérieur
            b) Après avoir mis le clignotant à droite pour se rabattre
            c) Quand on peut estimer soi-même que le dépassement est fait",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q265.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°266',
            'libelle'=> "En combien d‟étape s‟effectue le dépassement ?
            a) En une étape
            b) En deux étapes
            c) En trois étapes",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q266.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°267',
            'libelle'=> "Citez deux cas d‟interdiction de dépasser :
            a) Devant un panneau interdisant de dépasser et sur une ligne continue
            b) Devant un panneau interdisant de dépasser et sur une ligne discontinue
            c) Sur des lignes mixtes dont la ligne discontinue se trouve du côté du conducteur",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q267.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°268',
            'libelle'=> "Sur une chaussée à 3 voies et à double sens, on utilise, pour dépasser :
            a) La voie centrale
            b) La voie la plus à gauche
            c) La voie la plus à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q268.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 3,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°269',
            'libelle'=> "Donner l‟écart latéral minimal entre deux véhicules automobiles lors d‟un dépassement
            a) 1m environ
            b) 0,50m environ
            c) 0,3m environ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q269.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°270',
            'libelle'=> "Donner l‟écart minimal à observer par un automobiliste qui dépasse un piéton ou un cycliste en
            agglomération:
            a) 1m environ
            b) 0,5m environ
            c) 2,0m environ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q270.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°271',
            'libelle'=> "Quel serait votre comportement quand un usager s‟apprête à vous dépasser ?
            a) Je serre ma gauche
            b) J‟occupe l‟axe médian de la chaussée
            c) Je serre ma droite
            d) Je ralentis",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q271.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°272',
            'libelle'=> "A la vue de ce panneau B3 je peux dépasser :
            a) Tous véhicules à moteur qui me précèdent
            b) Un motocycliste sans side-car
            c) Un véhicule à traction animale
            d) Un cyclomotoriste sans side-car",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bcd',
            'filename' => 'q272.mp3',
            'extension' => 'mp3',
            'img' => '272.png',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°273',
            'libelle'=> "A la vue du panneau B3 :
            a) J‟accélère et je passe
            b) Je ne dois pas dépasser
            c) Je dois dépasser par la droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q273.mp3',
            'extension' => 'mp3',
            'img' => '273.png',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°274',
            'libelle'=> "Dans quels cas doit-on utiliser les clignotants ?
            a) Lorsqu‟on veut s‟insérer dans la circulation
            b) Lorsqu‟on veut augmenter ou réduire sa vitesse
            c) Lorsqu‟on veut dépasser ou se rabattre
            d) Lorsqu‟on veut changer de direction
            e) Lorsqu‟on veut croiser",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'acd',
            'filename' => 'q274.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°275',
            'libelle'=> "Dans quels cas utilise t- on ses feux de route ?
            a) En agglomération dans une rue non éclairée
            b) Lorsqu‟on va croiser un autre usager
            c) Lorsqu‟on ne risque d‟éblouir personne
            d) Lorsqu‟on quitte une zone éclairée pour une zone sombre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'acd',
            'filename' => 'q275.mp3',
            'extension' => 'mp3',
            'img' => '275.PNG',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°276',
            'libelle'=> "En rase campagne le dépassement est autorisé :
            a) A proximité des intersections
            b) Au sommet de côte
            c) Dans les virages
            d) Rien de tout ce qui précède",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'd',
            'filename' => 'q276.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°277',
            'libelle'=> "Pour effectuer un dépassement :
            a) J‟avertis, je contrôle, puis je déboîte
            b) Je contrôle, j‟avertis et je déboîte
            c) Je déboîte, j‟avertis, je contrôle",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q277.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°278',
            'libelle'=> "Lors du dépassement d‟un véhicule la nuit, je mets les feux de route,
            a) Immédiatement après avoir déboîter
            b) En arrivant à la hauteur du conducteur du véhicule à dépasser
            c) Tout de suite après m‟être rabattu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q278.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°279',
            'libelle'=> "Comment prévenir l‟usager à dépasser le jour ?
            a) Par des appels sonores
            b) Par des appels lumineux
            c) Par le clignotant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q279.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°280',
            'libelle'=> "Comment prévenir l‟usager à dépasser la nuit ?
            a) Par des appels sonores
            b) Par des appels lumineux
            c) Par le clignotant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q280.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°281',
            'libelle'=> "A une intersection de deux routes de même nature peut-on dépasser par la gauche ?
            a) On peut effectuer rapidement le dépassement
            b) On ne peut pas effectuer le dépassement
            c) On le peut si le véhicule qui me précède signal son intention de tourner à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q281.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°282',
            'libelle'=> "Aux sommets d‟une côte :
            a) Je peux dépasser si ma voiture a une réserve d‟accélération suffisante
            b) Je peux dépasser à la hauteur d‟une ligne continue
            c) Je ne peux pas dépasser",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q282.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°283',
            'libelle'=> "Sur une chaussée à double sens comportant trois voies :
            a) Je suis autorisé à dépasser en 3 ème position lorsqu‟aucun usager ne vient en face
            b) Je suis autorisé à dépasser en 3 ème position lorsque je juge suffisante la largeur de la
            chaussée
            c) Je ne suis pas autorisé à dépasser en 3 ème position",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q283.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°284',
            'libelle'=> "Au niveau des flèches de rabattement
            a) Je suis autorisé à dépasser lorsqu‟aucun usager ne vient en face
            b) Je suis autorisé à dépasser lorsque je juge la largeur de la chaussée suffisante
            c) Je ne suis pas autorisé à dépasser
            d) Je suis autorisé si l‟usager devant moi est trop lent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q284.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°285',
            'libelle'=> "Au niveau d‟une ligne continue accolée à une ligne discontinue plus proche du conducteur, peut-
            on effectuer le dépassement ?
            a) On ne peut pas effectuer le dépassement
            b) On peut effectuer le dépassement
            c) On ne peut pas effectuer le dépassement la nuit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q285.mp3',
            'extension' => 'mp3',
            'img' => '285.PNG',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°286',
            'libelle'=> "A quel passage à niveau le dépassement est-il autorisé ?
            a) A un passage à niveau sans barrière
            b) A un passage à niveau avec barrière à fonctionnement manuel
            c) A un passage à niveau avec barrière à fonctionnement automatique
            d) A aucun passage à niveau",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'd',
            'filename' => 'q286.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°287',
            'libelle'=> "Sur cette image D9
            a) Le véhicule bleu est en infraction
            b) Le véhicule bleu effectue une bonne manœuvre
            c) Le véhicule bleu n‟est pas en infraction
            d) Le véhicule bleu effectue une mauvaise manœuvre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q287.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°288',
            'libelle'=> "Sur cette chaussée D10 à trois voies et à double sens de circulation :
            a) Le véhicule jaune est en infraction
            b) Le véhicule jaune n‟est pas en infraction
            c) Le véhicule jaune effectue une bonne manœuvre
            d) Le véhicule jaune effectue une mauvaise manœuvre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ad',
            'filename' => 'q288.mp3',
            'extension' => 'mp3',
            'img' => '288.PNG',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°289',
            'libelle'=> "Sur cette image D11
            a) Le véhicule jaune effectue une bonne manœuvre
            b) Le véhicule jaune n‟est pas en infraction
            c) Le véhicule jaune effectue une mauvaise manœuvre
            d) Le véhicule jaune est en infraction",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q289.mp3',
            'extension' => 'mp3',
            'img' => '289.PNG',
            'sujet_id' => 4,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°290',
            'libelle'=> "Sur cette image D12
            a) Le véhicule vert est en infraction
            b) Le véhicule vert effectue une bonne manœuvre
            c) Le véhicule vert n‟est pas en infraction
            d) Le véhicule vert effectue une mauvaise manœuvre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q290.mp3',
            'extension' => 'mp3',
            'img' => '290.png',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°291',
            'libelle'=> "Sur cette chaussée D13 à quatre voies et à double sens de circulation,
            a) Le véhicule vert n‟est pas en infraction
            b) Le véhicule vert effectue une bonne manœuvre
            c) Le véhicule vert effectue une mauvaise manœuvre
            d) Le véhicule vert est en infraction",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'cd',
            'filename' => 'q291.mp3',
            'extension' => 'mp3',
            'img' => '291.PNG',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°292',
            'libelle'=> "Sur cette chaussée D13 à quatre voies et à sens unique :
            a) Le véhicule vert n‟est pas en infraction
            b) Le véhicule vert effectue une bonne manœuvre
            c) Le véhicule vert effectue une mauvaise manœuvre
            d) Le véhicule vert est en infraction",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q292.mp3',
            'extension' => 'mp3',
            'img' => '292.PNG',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°293',
            'libelle'=> "Sur cette image D9 :
            a) Le véhicule bleu est en infraction
            b) Le véhicule bleu n‟est pas en infraction
            c) Le véhicule bleu effectue une mauvaise manœuvre
            d) Le véhicule bleu effectue une bonne manœuvre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q293.mp3',
            'extension' => 'mp3',
            'img' => '293.PNG',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°294',
            'libelle'=> "Sur cette chaussée D10 à trois voies et à sens unique de circulation
            a) Le véhicule jaune est en infraction
            b) Le véhicule jaune effectue une bonne manœuvre
            c) Le véhicule jaune effectue une mauvaise manœuvre
            d) Le véhicule jaune n‟est pas en infraction",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bd',
            'filename' => 'q294.mp3',
            'extension' => 'mp3',
            'img' => '294.PNG',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°295',
            'libelle'=> "Sur cette image D4
            a) Le véhicule bleu est en infraction
            b) Le véhicule bleu n‟est pas en infraction
            c) Le véhicule bleu effectue une bonne manœuvre
            d) Le véhicule bleu effectue une mauvaise manœuvre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'bc',
            'filename' => 'q295.mp3',
            'extension' => 'mp3',
            'img' => '295.PNG',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°296',
            'libelle'=> "Sur une chaussée à plus de deux voies et à double sens de circulation, le dépassement est interdit :
            a) Sur la voie se trouvant la plus à gauche
            b) Sur la voie du milieu
            c) Sur toutes les voies",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q296.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°297',
            'libelle'=> "Sur une chaussée à deux voies et à double sens, je peux circuler :
            a) Sur la voie de gauche pour effectuer un dépassement
            b) Sur la voie de gauche de façon continue
            c) Sur la voie de droite seulement
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q297.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°298',
            'libelle'=> "Le franchissement ou le chevauchement de la ligne continue est autorisé :
            a) A tout moment
            b) A aucun moment
            c) Pour effectuer un dépassement
            d) Lorsque la chaussée est libre",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q298.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°299',
            'libelle'=> "Vous circulez par temps de grand vent ; pour dépasser un autre usager :
            a) Vous diminuez l‟écart latéral
            b) Vous maintenez l‟écart latéral
            c) Vous augmentez l‟écart latéral",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q299.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°300',
            'libelle'=> "Pour effectuer un croisement, je dois :
            a) Accélérer
            b) Ralentir
            c) Serrer ma droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q300.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°301',
            'libelle'=> "Pour effectuer un croisement la nuit, je dois
            a) Klaxonner
            b) Circuler en phare
            c) Circuler en code
            d) Circuler en feux de détresse",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q301.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°303',
            'libelle'=> "Quel est le véhicule qui doit s‟arrêter à temps à cause d‟un croisement difficile sur un terrain plat ?
            a) Le véhicule léger
            b) Le véhicule encombrant
            c) Le véhicule qui veut",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q303.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°304',
            'libelle'=> "En agglomération, quel est le véhicule qui doit s‟arrêter à temps à cause d‟un croisement difficile ?
            a) L‟autobus
            b) Le véhicule qui le désire
            c) Le camion",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q304.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°305',
            'libelle'=> "Lorsque deux véhicules de même catégorie se retrouvent sur une pente, lequel doit faire la marche
            arrière à cause d‟un croisement difficile ?
            a) Le véhicule montant
            b) Le véhicule descendant
            c) Le véhicule qui veut",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q305.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°306',
            'libelle'=> "Dans quels cas dois-je m‟arrêter pour laisser passer l‟usager venant en sens inverse ?
            a) Devant le panneau 'chaussée rétrécie' et un obstacle devant moi
            b) Devant le panneau 'céder le passage' aux usagers venant en sens inverse et devant un
            panneau 'chaussée rétrécie'
            c) Devant le panneau sens interdit et un obstacle devant moi",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q306.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°307',
            'libelle'=> "Sur une pente, quel est le véhicule qui doit faciliter le passage lors d‟un croisement difficile ?
            a) L‟autobus chargé
            b) Le camion
            c) Le véhicule qui le désire",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q307.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°308',
            'libelle'=> "Sur une pente, quel est le véhicule qui doit faire la marche arrière à cause d‟un croisement
            difficile ?
            a) Le véhicule isolé
            b) Le véhicule articulé
            c) Le véhicule qui veut",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q308.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°309',
            'libelle'=> "La nuit, pour éviter d‟être ébloui :
            a) Je regarde le bord droit de la chaussée
            b) Je ferme les yeux pendant un court instant
            c) Je porte des verres teintés
            d) J‟allume mes feux de route",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q309',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°310',
            'libelle'=> "L'écart minimal de vitesse recommandé pour un véhicule qui veut effectuer le dépassement est
            de :
            a) 30km/h
            b) 25 km/h
            c) 40 km/h
            d) 20 km/h
            e) 10 km/h",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'd',
            'filename' => 'q310.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 5,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°311',
            'libelle'=> "Sur une chaussée à forte déclivité, quel est le véhicule qui doit s‟arrêter à temps lorsque le
            croisement se révèle difficile ?
            a) Le véhicule descendant
            b) Le véhicule qui le désire
            c) Le véhicule montant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q311.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°312',
            'libelle'=> "Je laisse passer l‟usager d‟en face en m‟arrêtant :
            a) Quand se dresse un obstacle devant moi
            b) Devant un panneau de circulation à sens unique
            c) Quand je suis au volant d‟un véhicule encombrant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q312.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°313',
            'libelle'=> "Quel doit être mon comportement lorsqu‟un usager manifeste son intention de me dépasser ?
            a) Je ne l‟empêche pas si la manœuvre est régulière
            b) Je serre ma droite le plus possible
            c) J‟accélère
            d) Je maintiens mon allure et, au besoin je ralentis
            e) La nuit, je passe en feu de croisement quand il arrive à ma hauteur",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'abde',
            'filename' => 'q313.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°314',
            'libelle'=> "Dans quels cas devez vous céder le passage de gauche comme de droite ?
            a) devant le feu vert ou jaune clignotant
            b) devant le feu rouge
            c) devant le panneau « STOP »
            d) devant le panneau « Triangle pointe en bas »
            e) en sortant d‟un chemin de terre, d‟un garage ou d‟un parking",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => 'e',
            'reponse' => 'bcde',
            'filename' => 'q314.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°315',
            'libelle'=> "Hors agglomération, le panneau à caractère prioritaire est répété :
            a) tous les 5km
            b) après chaque intersection
            c) tous les 2km
            d) après chaque virage
            e) tous les kilomètres",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'ab',
            'filename' => 'q315.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°316',
            'libelle'=> "En agglomération, le panneau à caractère prioritaire est répété :
            a) tous les 5 kilomètres
            b) après chaque intersection
            c) Tous les 2 kilomètres
            d) Après chaque virage
            e) Tous les kilomètres",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'e',
            'filename' => 'q316.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°317',
            'libelle'=> "Quel est le but des ronds-points ?
            a) faciliter l‟écoulement des trafics
            b) briser les vitesses
            c) permettre le stationnement des véhicules",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q317.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°318',
            'libelle'=> "A quoi peut-on s‟attendre lors d‟un croisement ou dépassement d‟un véhicule à deux roues ?
            a) non respect des signaux
            b) non respect des règles de priorité
            c) des écarts sans avertir, sans contrôler",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'abc',
            'filename' => 'q318.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°319',
            'libelle'=> "A cette intersection Im4 ; P55, l‟usager se trouvant dans la voie du milieu peut :
            a- tourner à droite
            b- tourner à gauche
            c- continuer tout droit",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q319.mp3',
            'extension' => 'mp3',
            'img' => '319.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°320',
            'libelle'=> "Sur une chaussée à forte déclivité, quel est le véhicule qui doit s‟arrêter à temps lorsque le
            croisement se révèle difficile ?
            a) Le véhicule descendant
            b) Le véhicule qui le désire
            c) Le véhicule montant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q320.mp3',
            'extension' => 'mp3',
            'img' => '320.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°321',
            'libelle'=> "A cette intersection (Im6 ; P65) quel est le véhicule qui passe le premier ?
            a- le rouge
            b- le jaune
            c- le bleu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q321.mp3',
            'extension' => 'mp3',
            'img' => '321.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°322',
            'libelle'=> "A cette intersection Im7 ; P65, quel est le véhicule qui peut passer immédiatement ?
            a- le bleu
            b- le jaune
            c- le vert",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q322.mp3',
            'extension' => 'mp3',
            'img' => '322.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°323',
            'libelle'=> "A cette intersection Im8 P55 le véhicule vert peut :
            a- tourner immédiatement à droit
            b- continuer tout droit
            c- ne peut tourner immédiatement à droite",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q323.mp3',
            'extension' => 'mp3',
            'img' => '323.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°324',
            'libelle'=> "Pour me rabattre à droite après un dépassement, j‟attends :
            a- De ne plus voir le véhicule par la vitre latérale droite
            b- De voir le véhicule dans mon rétroviseur droit
            c- De voir le véhicule dans mon rétroviseur intérieur",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q324.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°325',
            'libelle'=> "La force centrifuge augmente proportionnellement:
                a- Avec la vitesse
                b- Avec le rayon de la courbe
                c- Avec la charge du véhicule",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q325.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°326',
            'libelle'=> "A l‟approche d‟une intersection, sur une route à caractère prioritaire :
            a- je peux dépasser un véhicule
            b- je ne peux pas dépasser un véhicule
            c- je ne peux pas dépasser lorsqu‟il y a un marquage au sol l‟interdisant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ac',
            'filename' => 'q326.mp3',
            'extension' => 'mp3',
            'img' => '326.PNG',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°327',
            'libelle'=> "Je suis sur une route à caractère prioritaire, si je n‟ai pas à céder le passage :
            a- à droite aux intersections
            b- à gauche aux intersections
            c- à la prochaine intersection seulement",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'ab',
            'filename' => 'q327.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°328',
            'libelle'=> "Pour ma sécurité et celle des autres, je dois circuler :
            a- à droite dans ma voie
            b- au centre de ma voie
            c- à gauche dans ma voie",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q328.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°329',
            'libelle'=> "Dans un croisement à l'indonésienne, les véhicules se croisent :
            a- par la droite
            b- par la gauche",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q329.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°330',
            'libelle'=> "A une intersection sans signalisation, je dois céder le passage :
            a- à gauche seulement
            b- à droite seulement
            c- à droite et à gauche
            d- à aucun usager",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q330.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°331',
            'libelle'=> "En montagne, sur une route étroite, celui qui doit s‟arrêter est :
            a- Le véhicule qui monte
            b- Le véhicule qui descend
            c- Le véhicule le plus chargé
            d- Le véhicule le moins chargé",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q331.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 6,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°332',
            'libelle'=> "Dans une longue et forte descente :
                a- Je Freine en permanence pour ne pas prendre de vitesse
                b- Je freine au début pour rétrograder et utiliser le frein moteur
                c- Dans des lignes droites, je mets le levier de vitesse au point mort pour
                consommer moins de carburant",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q332.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°333',
            'libelle'=> "Sur cette image Im 3 quel est l‟ordre de passage des voitures
            a- rouge d‟abord, bleue ensuite et enfin vert
            b- bleue d‟abord puis vert et rouge simultanément, vert d‟abord, bleue ensuite et
            rouge en fin",
            'a' => 'a',
            'b' => 'b',
            'c' => '',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q333.mp3',
            'extension' => 'mp3',
            'img' => '333.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°334',
            'libelle'=> "Donnez la règle à appliquer et l‟ordre de passage des véhicules :
            a- perte de priorité
            b- priorité de passage
            c- priorité à droite
            d- rouge, bleu, jaune
            e- bleu, jaune, rouge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'cb',
            'filename' => 'q334.mp3',
            'extension' => 'mp3',
            'img' => '334.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°335',
            'libelle'=> "Sur cette image Im2 P47, donnez les règles à appliquer et l‟ordre de passage des véhicules
            a- priorité à droite
            b- perte de priorité
            c- priorité de passage
            d- jaune et bleu simultanément puis rouge
            e- rouge, jaune, bleu",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'bcd',
            'filename' => 'q335.mp3',
            'extension' => 'mp3',
            'img' => '335.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°336',
            'libelle'=> "Sur cette image Im3 P47, donnez les règles à appliquer et l‟ordre de passage des véhicules
            a- priorité à droite
            b- priorité de passage
            c- perte de priorité
            d- jaune, bleu, rouge
            e- bleu, rouge, jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'ad',
            'filename' => 'q336.mp3',
            'extension' => 'mp3',
            'img' => '336.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°337',
            'libelle'=> "Sur cette image Im4 P47, donnez les règles à appliquer et l‟ordre de passage des véhicules
            a- perte de priorité
            b-priorité de passage
            c-courtoisie
            d-jaune et rouge simultanément puis bleu et blanc après
            e-Bleu et blanc simultanément puis rouge et jaune après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'abd',
            'filename' => 'q337.mp3',
            'extension' => 'mp3',
            'img' => '337.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°338',
            'libelle'=> "Sur cette image Im5 P47, donnez les règles à appliquer et l'ordre de passage des véhicules
            a- perte de priorité
            b- priorité à droite
            c- priorité de passage
            d- bleue, rouge, jaune
            e- bleu et jaune simultanément puis rouge après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'ace',
            'filename' => 'q338.mp3',
            'extension' => 'mp3',
            'img' => '338.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°339',
            'libelle'=> "Sur cette image Im6 P47, donnez les règles à appliquer et l‟ordre de passage des véhicules
            a- priorité à droite
            b- priorité de passage
            c- perte de priorité
            d- rouge d‟abord, puis bleu et jaune après
            e- bleu, rouge et jaune",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'e',
            'filename' => 'q339.mp3',
            'extension' => 'mp3',
            'img' => '339.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°340',
            'libelle'=> "Sur cette image Im7 P47, donnez les règles à appliquer et l‟ordre de passage des véhicules
            a- perte de priorité
            b- priorité de passage
            c- la priorité à droite
            d- bleu, jaune, rouge
            e- bleu et rouge simultanément, puis jaune après",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'abe',
            'filename' => 'q340.mp3',
            'extension' => 'mp3',
            'img' => '340.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°341',
            'libelle'=> "Sur cette image Im1 P49, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'a',
            'filename' => 'q341.mp3',
            'extension' => 'mp3',
            'img' => '341.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°342',
            'libelle'=> "Sur cette image Im2 P49, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'b',
            'filename' => 'q342.mp3',
            'extension' => 'mp3',
            'img' => '342.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'titre' => 'Question n°343',
            'libelle'=> "Sur cette image Im3 P49, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'b,e',
            'filename' => 'q343.mp3',
            'extension' => 'mp3',
            'img' => '343.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°344',
            'libelle'=> "Sur cette image, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'e',
            'filename' => 'q344.mp3',
            'extension' => 'mp3',
            'img' => '344.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°345',
            'libelle'=> "Sur cette image Im5 P49, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'e',
            'filename' => 'q345.mp3',
            'extension' => 'mp3',
            'img' => '345.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°346',
            'libelle'=> "Sur cette image Im6 P49, choisi le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'c',
            'filename' => 'q346.mp3',
            'extension' => 'mp3',
            'img' => '346.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°347',
            'libelle'=> "Sur cette image Im7 P49, choisissez le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'b',
            'filename' => 'q347.mp3',
            'extension' => 'mp3',
            'img' => '347.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°348',
            'libelle'=> "DSur cette image Im8 P49, choisi le panneau manquant parmi les panneaux proposés",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'ac',
            'filename' => 'q348.mp3',
            'extension' => 'mp3',
            'img' => '348.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°349',
            'libelle'=> "Sur cette image Im N°1 P60:
            a- nous sommes en présence d‟une ligne d‟avertissement
            b- le véhicule bleu peut dépasser
            c- le véhicule rouge peut s‟arrêter sur la chaussée
            d- la ligne de rive peut être franchie",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => '',
            'reponse' => 'abd',
            'filename' => 'q349.mp3',
            'extension' => 'mp3',
            'img' => '349.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°350',
            'libelle'=> "Sur cette image (Im 1 p57), quelle est la position de l‟agent qui vous autorise le passage ?",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'reponse' => 'a',
            'filename' => 'q350.mp3',
            'extension' => 'mp3',
            'img' => '350.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°351',
            'libelle'=> "Quel est l‟ordre de passage des véhicules à cette intersection (Im 2)
            a- rouge- jaune – bleu – blanc
            b- rouge et bleu simultanément puis blanc et jaune sur ordre de l‟agent
            c- jaune et blanc simultanément puis bleu et rouge sur ordre de l‟agent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q351.mp3',
            'extension' => 'mp3',
            'img' => '351.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°352',
            'libelle'=> "A cette intersection In 3, quel sera l‟ordre de passage des véhicules ?
            a- rouge – blanc- jaune –vert
            b- bleu et rouge simultanément puis bleu et vert au feu vert
            c- bleu et vert simultanément puis rouge et jaune sur l‟ordre de l‟agent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q352.mp3',
            'extension' => 'mp3',
            'img' => '352.PNG',
            'sujet_id' => 7,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°353',
            'libelle'=> "Sur cette image (Im5) que signifie le geste de l‟agent N°1 ?
            a- passer rapidement
            b- ralentir
            c- s‟arrêter",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q353.mp3',
            'extension' => 'mp3',
            'img' => '353.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°354',
            'libell e'=> "Sur cette image Im 5 que signifie le geste de l‟agent N°2 ?
            a- passer rapidement
            b- ralentir
            c- s‟arrêter",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'b',
            'filename' => 'q354.mp3',
            'extension' => 'mp3',
            'img' => '354.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°355',
            'libelle'=> "Sur cette image Im 5 que signifie la position de l‟agent N°3 ?
            a- passer rapidement
            b- ralentir
            c- s‟arrêter",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q355.mp3',
            'extension' => 'mp3',
            'img' => '355.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°356',
            'libelle'=> "A cette intersection Im 6 quel sera l‟ordre de passage des véhicules ?
            a- jaune-rouge-bleu
            b- bleu et jaune simultanément puis rouge dès que la chaussée abordée par lui
            sera libre
            c- vert, jaune et rouge, bleu sur l‟ordre de l‟agent",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q356.mp3',
            'extension' => 'mp3',
            'img' => '356.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°357',
            'libelle'=> "A cette image Im 7 quel sera l‟ordre de passage des véhicules ?
            a- vert et jaune, puis rouge et bleu
            b- rouge et bleu puis le jaune et vert
            c- vert et jaune, puis rouge et bleu sur ordre de l‟agent
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'c',
            'filename' => 'q357.mp3',
            'extension' => 'mp3',
            'img' => '357.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        [
            'titre' => 'Question n°358',
            'libelle'=> " Sur cette image Im 1 quel est l‟ordre de passage des voitures :
            a- rouge et jaune simultanément puis bleue au feu vert
            b- bleue puis rouge et jaune simultanément
            c- jaune d‟abord, bleue ensuite et enfin rouge",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q358.mp3',
            'extension' => 'mp3',
            'img' => '358.PNG',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'titre' => 'Question n°359',
            'libelle'=> "Lorsque les véhicules que je croise roulent en feux de croisement, je prévois que je peux
            rencontrer :
            a- une zone d‟intempéries
            b- un contrôle de vitesse
            c- un contrôle routier
            ",
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => '',
            'e' => '',
            'reponse' => 'a',
            'filename' => 'q359.mp3',
            'extension' => 'mp3',
            'img' => '',
            'sujet_id' => 8,
            'chapitre_id' =>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

/// finc chapitre II


[
    'titre' => 'Question n°360',
    'libelle'=> " Sur une chaussée à double sens :
    a) Je peux faire demi-tour
    b) Je ne peux pas faire demi-tour
    c) Je ne peux pas faire marche arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q360.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°361',
    'libelle'=> " Les flèches de rabattement m‟obligent :
    a) A serrer ma gauche
    b) A serrer ma droite
    c) A quitter la chaussée
    d) A réduire ma vitesse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q361.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°362',
    'libelle'=> " Sur une chaussée à double sens comportant plus de deux voies, il est interdit d‟emprunter :
    a) La voie la plus à droite
    b) La voie du milieu
    c) La voie la plus à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q362.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°363',
    'libelle'=> " En quoi consiste l‟arrêt ?
    a) A l‟immobilisation momentanée d‟un véhicule, conducteur à bord
    b) A l‟immobilisation de longue durée d‟un véhicule, conducteur éloigné
    c) A l‟immobilisation momentanée d‟un véhicule, conducteur éloigné

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q363.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°364',
    'libelle'=> " Lors d‟un arrêt :
    a) Le conducteur est à côté du véhicule
    b) Le conducteur s‟éloigne du véhicule
    c) Le conducteur est à bord du véhicule
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q364.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°365',
    'libelle'=> " En quoi consiste le stationnement
    a) A l‟immobilisation momentanée d‟un véhicule, conducteur à bord
    b) A l‟immobilisation momentanée d‟un véhicule, conducteur à côté
    c) A l‟immobilisation momentanée d‟un véhicule, conducteur éloigné
    d) A l‟immobilisation de longue durée d‟un véhicule

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q365.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°366',
    'libelle'=> "En présence du panneau de 'stationnement interdit' je suis autorisé à :
    a) Stationner avant le panneau
    b) Stationner après le panneau
    c) Stationner avant la prochaine intersection
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q366.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°367',
    'libelle'=> "A la rencontre du panneau 'arrêt et stationnement interdits', l‟interdiction commence :
    a) Avant le panneau
    b) A partir du panneau
    c) 15 m après le panneau
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q367.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°368',
    'libelle'=> "La distance de freinage augmente :
    a) quand la chaussée est mouillée
    b) quand les pneus sont usés
    c) quand les rotules sont usées
    d) quand la chaussée est rétrécie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q368.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°369',
    'libelle'=> "A la vue d‟un usager qui veut s‟insérer dans la circulation :
    a) je klaxonne
    b) je ralentis
    c) je fais un appel de feux
    d) je change de voie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q369.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°370',
    'libelle'=> "La distance d‟arrêt augmente :
    a) si le conducteur est fatigué
    b) si la chaussée est légèrement mouillée
    c) si les pneus sont usés
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q370.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°371',
    'libelle'=> "En cas de pluie, je risque :
    a) l‟aquaplaning
    b) la glissade
    c) le blocage des roues

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q371.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°372',
    'libelle'=> "Plus je roule vite et plus j‟augmente :
    a) le temps de réaction
    b) la distance d‟arrêt
    c) la distance de freinage


    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q372.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°373',
    'libelle'=> "La distance de freinage dépend :
    a) de la vitesse
    b) de l‟adhérence
    c) du temps de réaction
    d) de l‟état physique du conducteur
    e) de l‟état des amortisseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ab',
    'filename'  => 'q373.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°374',
    'libelle'=> "Un conducteur ayant l‟intention de changer de direction doit :
    a) ralentir
    b) signaler son intention
    c) klaxonner pour faire dégager les piétons engagés sur leur passage

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q374.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°375',
    'libelle'=> "Quel doit être votre comportement à l‟approche d‟un lieu-dit :
    a) rouler vite
    b) ralentir
    c) klaxonner
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q375.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°376',
    'libelle'=> "Un conducteur ayant l‟intention de changer de direction doit :
    a) s‟assurer que la route qu‟il veut emprunter n‟est pas en sens interdit
    b) surveiller la route vers l‟avant et l‟arrière
    c) signaler son intention à l‟aide du clignotant
    d) ralentir sans freiner brusquement pour ne pas surprendre les usagers qui le
    suivent
    e) respecter les priorités de passage et notamment les piétons qui traversent
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcde',
    'filename'  => 'q376.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°377',
    'libelle'=> "Pour adapter sa vitesse le conducteur doit tenir compte :
    a) de l‟importance du trafic
    b) des risques prévisibles
    c) de l‟adhérence
    d) de la visibilité
    e) de sa propre vigilance
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcde',
    'filename'  => 'q377.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°378',
    'libelle'=> "Un vent latéral violent est particulièrement dangereux :
    a- lorsqu‟il souffle par rafales
    b- lors du passage de zones ventées en zones abritées
    c- si je tracte une caravane
    d- s‟il souffle de face
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q378.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°379',
    'libelle'=> "De nuit, seul sur autoroute, avec des feux de route éclairant à 100 mètres, je peux rouler à :
    a- 130 km/h
    b- 110 km/h
    c- 100 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q379.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°380',
    'libelle'=> "Sur une voie d‟insertion, j‟accélère pour : 88
    a- atteindre la vitesse de circulation de la chaussée abordée
    b- M‟engager sans ralentir la circulation
    c- M‟engager avant les usagers de la route abordée

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q380.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°381',
    'libelle'=> "Sur une voie d‟insertion :
    a- J‟accélère, je mets le clignotant, je me place dans ma voie
    b- J‟accélère en contrôlant, je mets le clignotant dès que je peux m‟insérer
    c- J‟accélère jusqu‟au bout de la voie, je contrôle, je m‟insère si je peux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q381.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°382',
    'libelle'=> "Plus le rayon du virage est faible :
    a- Plus le virage est serré
    b- Plus le virage est large
    c- Plus la force centrifuge est importante
    d- Plus la force centrifuge est faible
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q382.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°383',
    'libelle'=> "Sur route, lorsque l‟accotement de droite n‟est pas praticable je peux stationner:
    a- sur l‟accotement de gauche
    b- sur l‟accotement de gauche en agglomération
    c- sur la voie de droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q383.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°383',
    'libelle'=> "Sur route, lorsque l‟accotement de droite n‟est pas praticable je peux stationner:
    a- sur l‟accotement de gauche
    b- sur l‟accotement de gauche en agglomération
    c- sur la voie de droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q383.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°384',
    'libelle'=> "Lorsque l‟arrêt est interdit :
    a- le stationnement est interdit
    b- le stationnement n‟est pas interdit
    c- le stationnement temporaire est interdit
    d- seul le stationnement temporaire est autorisé
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q384.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°385',
    'libelle'=> "Le contrôle de la durée d‟un stationnement payant peut se faire :
    a- par horodateur
    b- par disque de stationnement
    c- par parcmètre

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q385.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°386',
    'libelle'=> "On appelle stationnement gênant le fait de stationner :
    a- dans une voie réservée aux bus
    b- devant une sortie de propriété
    c- sur un pont
    d- à proximité d‟une voie ferrée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q386.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°387',
    'libelle'=> "Ajuster sa vitesse aux circonstances, c‟est ralentir suffisamment :
    a- pour ne jamais dépasser la vitesse maximum autorisée
    b- chaque fois que la visibilité est réduite
    c- chaque fois que l‟adhérence est réduite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q387.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°388',
    'libelle'=> "Pour évaluer l‟allure d‟un autre usager venant en face, je prends en compte :
    a- le type de véhicule
    b- la vitesse de rapprochement
    c- l‟état du conducteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q388.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°389',
    'libelle'=> "Le temps de réaction est le temps nécessaire au conducteur pour :
    a- percevoir et réagir
    b- arrêter la voiture
    c- évaluer l‟allure d‟un autre usager
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q389.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°390',
    'libelle'=> "Le temps de réaction a une durée d‟environ :
    a- un dixième de seconde
    b- une seconde
    c- dix secondes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q390.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°391',
    'libelle'=> "Sur chaussée mouillée ou glissante, il y a augmentation de la distance :
    a- Parcourue pendant le temps de réaction
    b- De freinage
    c- D‟arrêt
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q391.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°392',
    'libelle'=> "A 90 km/h, dans des conditions normales, ma distance d‟arrêt est d‟environ :
    a- 25 mètres
    b- 54 mètres
    c- 81 mètres
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q392.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°393',
    'libelle'=> "La règlementation du stationnement a pour objet :
    a- La sécurité
    b- La fluidité de la circulation

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q393.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°394',
    'libelle'=> "Je suis en infraction si je suis en stationnement :
    a- Dangereux
    b- Abusif
    c- Gênant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q394.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°395',
    'libelle'=> "Dans quels cas faut-il réduire sa vitesse ?
    a) Lorsqu‟il n‟y a pas de panneau de signalisation
    b) Lorsque la route n‟apparaît pas libre
    c) Dans les descentes rapides
    d) Lorsqu‟on aborde une intersection
    e) A l‟approche des montées.

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'bcd',
    'filename'  => 'q395.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°396',
    'libelle'=> "Lorsque je quitte momentanément mon véhicule pour acheter mon journal, je suis considéré
    comme étant :
    a- En arrêt
    b- En stationnement

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q396.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°397',
    'libelle'=> "En général, se ranger en bataille s‟effectue :
    a- En marche avant
    b- En marche arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q397.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°398',
    'libelle'=> "Pendant la durée de la période probatoire, la vitesse du conducteur sur une autoroute est
    ordinairement limitée à :
    a- 100 km/h
    b- 110 km/h
    c- 130 km/h

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q398.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°399',
    'libelle'=> "En cas de visibilité réduite à 50mètres, la vitesse ne peut excéder :
    a- 90 km/h
    b- 60 km/h
    c- 50 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q399.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°400',
    'libelle'=> "Sur une route de montagne, je stationne de préférence :
    a- En côte, sur la chaussée
    b- En descente, sur la chaussée
    c- Sur une place d‟évitement

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q400.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°401',
    'libelle'=> "En cas de défaillance du frein principal :
    a- je rétrograde pour utiliser le frein moteur
    b- je coupe le moteur pour arrêter le véhicule
    c- je dose mon freinage à l‟aide du frein à main déverrouillé

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q401.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°402',
    'libelle'=> "Un conducteur d‟un véhicule qui dérape doit :
    91
    a- freiner fort pour stopper le véhicule
    b- braquer calmement pour ramener le véhicule sur sa trajectoire
    c- accélérer franchement pour redonner de l‟adhérence aux roues arrière

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q402.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°403',
    'libelle'=> "Si mes roues mordent sur le bas côté de la route :
    a- je freine fort et je corrige rapidement ma trajectoire
    b- je freine légèrement et je reviens progressivement sur la chassée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q403.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°404',
    'libelle'=> "Lorsque je fais remorquer mon véhicule par un autre usager :
    a- je ne dois pas dépasser la vitesse de 25 km/h
    b- je dois signaler mon véhicule à l‟aide des feux de détresse
    c- je reste vigilant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q404.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>3,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

/// chapitre 4
[
    'titre' => 'Question n°405',
    'libelle'=> "A bord d‟un véhicule de tourisme, pour tourner à droite, je dois :
    a) Serrer ma droite
    b) Serrer ma gauche
    c) Me déporter au milieu de la chaussée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q405.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°406',
    'libelle'=> "Pour tourner à droite, je dois :
    a) Accélérer
    b) Mettre le clignotant à droite
    c) Ralentir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q406.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°407',
    'libelle'=> "A bord d‟un véhicule de tourisme pour tourner à gauche sur une chaussée à double sens, je dois :
    a) Serrer ma droite
    b) Me déporter au milieu de la chaussée
    c) Serrer ma gauche

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q407.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°408',
    'libelle'=> "A bord d‟un véhicule de tourisme pour tourner à gauche sur une chaussée à sens unique, je dois :
    a) Serrer ma droite et mettre le clignotant à gauche
    b) Respecter les règles de priorité
    c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q408.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°409',
    'libelle'=> "Je dois réduire ma vitesse
    a) A l‟approche d‟un virage
    b) A la hauteur d‟une ligne continue
    c) A l‟approche d‟une intersection
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q409.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°410',
    'libelle'=> "Je dois réduire ma vitesse
    a) A la sortie d‟une agglomération
    b) A la vue d‟un panneau de limitation de vitesse
    c) Pendant le dépassement
    d) A l‟approche d‟un passage à niveau

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename'  => 'q410.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°411',
    'libelle'=> "La bande rouge discontinue de blanc le long du trottoir, interdit :
    a) L‟arrêt
    b) Le stationnement
    c) L‟arrêt pour les véhicules légers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q411.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°412',
    'libelle'=> "Après combien de jours le stationnement devient-il abusif ?
    94
    a) 10 jours
    b) 7 jours
    c) 4 jours
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q412.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°413',
    'libelle'=> "Le panneau B7b :
    a) Interdit le stationnement à tout véhicule à moteur sauf les camions
    b) Interdit l‟accès à tous les véhicules à moteur
    c) Interdit l‟accès à tous les véhicules sauf les camions
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q413.mp3',
    'extension' => 'mp3',
    'img' => '413.png',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°414',
    'libelle'=> "A la vue du panneau B6d :
    a) Je ne peux pas m‟arrêter
    c) Je ne peux pas m‟arrêter mais je peux stationner
    d) Je ne peux ni m‟arrêter ni stationner
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q414.mp3',
    'extension' => 'mp3',
    'img' => '414.png',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°415',
    'libelle'=> "Dans quels cas peut-on utiliser le frein moteur ?
    a) Pour s'arrêter
    b) Pour ralentir
    c) Pour aborder un virage
    d) Pour aborder une descente dangereuse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bcd',
    'filename'  => 'q415.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°416',
    'libelle'=> "Que signifie le panneau B9c ?
    a) Accès interdit aux chevaux
    b) Accès interdit aux véhicules agricoles à moteur
    c) Accès interdit aux véhicules à traction animale
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q416.mp3',
    'extension' => 'mp3',
    'img' => '416.PNG',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
// saute

[
    'titre' => 'Question n°427',
    'libelle'=> "A quelle vitesse peut-on rouler à la vue du panneau B43 ?
    a) A 30 km/h
    b) A plus de 30 km/h
    c) A la vitesse réglementaire
    d) A moins de 30 km/h
    e) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcd',
    'filename'  => 'q427.mp3',
    'extension' => 'mp3',
    'img' => '427.PNG',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°428',
    'libelle'=> "Le stationnement est dangereux
    a) Dans un virage
    b) Derrière les véhicules en stationnement
    c) A proximité d‟une intersection
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q428.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°429',
    'libelle'=> "Sur une route hors agglomération, les véhicules peuvent stationner :
    a) Sur le côté droit seulement
    b) Sur le côté droit ou sur le côté gauche
    c) Sur les accotements
    d) Sur le côté gauche seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q429.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°430',
    'libelle'=> "Dans une rue à sens unique, les véhicules peuvent stationner :
    a) Sur le côté droit seulement
    b) Sur le côté droit ou sur le côté gauche
    c) Sur le côté gauche seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q430.mp3',
    'extension' => 'mp3',
    'img' => '430.PNG',
    'sujet_id' => 8,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°431',
    'libelle'=> "A l‟approche d‟un virage à courbure très prononcée et bordé d‟arbres, je dois tenir compte de :
    a) La force centrifuge
    b) L‟adhérence
    c) La visibilité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q431.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°432',
    'libelle'=> "Dans un virage pour une bonne adhérence des pneus, je dois rouler :
    a) En deuxième vitesse
    b) En troisième vitesse
    c) En quatrième vitesse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q432.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°433',
    'libelle'=> "La ligne jaune continue sur la bordure du trottoir :
    a) Interdit le stationnement
    b) Autorise l‟arrêt
    c) Indique une zone d‟arrêt de bus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q433.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°434',
    'libelle'=> "La ligne jaune discontinue sur la bordure du trottoir :
    a) Interdit le stationnement
    b) Autorise l‟arrêt
    c) Indique une zone d‟arrêt de bus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q434.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°435',
    'libelle'=> "Quels sont les risques auxquels je m‟expose en abordant un virage à vive allure ?
    a) Je risque de déraper et de me retrouver hors de la chaussée
    b) Je risque de déraper et de heurter l‟usager venant en sens inverse
    c) Je risque de casser le pare-brise à cause du vent latéral
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q435.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°436',
    'libelle'=> "Quelles précautions prendre pour aborder un virage ?
    a) Je passe rapidement en tenant fortement mon volant
    b) Je maintiens ma vive allure en serrant fortement mon volant
    c) Je réduis ma vive allure en maintenant ma droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q436.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°437',
    'libelle'=> "La ligne jaune brisée en bordure de la chaussée :
    a) Interdit le dépassement
    b) Autorise le dépassement
    c) Indique une zone d‟arrêt de bus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q437.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°438',
    'libelle'=> "Sur une route en rase campagne les véhicules peuvent stationner :
    a) Sur le côté droit seulement
    b) Sur le côté droit ou sur le côté gauche
    c) Sur le côté gauche seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q438.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°439',
    'libelle'=> "Pour prendre un usager de la route, je m‟arrête :
    a) Sur la chaussée avec clignotant
    b) Sur l‟accotement avec les feux de détresse
    c) Avec mon clignotant droit en me positionnant sur l‟accotement
    d) Avec mon clignotant droit en serrant ma droite

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q439.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°440',
    'libelle'=> "Quelle est la toute première opération à effectuer par le conducteur pour immobiliser son véhicule
    roulant en prise directe
    a) Débrayer
    b) Freiner
    c) Mettre le levier au point mort
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q440.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°441',
    'libelle'=> "A la vue d‟un obstacle inopiné à vive allure :
    a) Je débraie et je freine
    b) Je freine en bloquant les roues
    c) Je freine franchement et je débraie au dernier moment
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q441.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°442',
    'libelle'=> "Où peut-on faire un demi-tour ?
    a) Sur un pont
    b) Sur une chaussée à sens unique
    c) Dans un virage
    d) Sur une chaussée à double sens de circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q442.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°443',
    'libelle'=> "Où peut-on faire la marche arrière ?
    a) Sur un pont
    b) Sur une chaussée à sens unique
    c) Sur l‟accotement ou sur le trottoir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q443.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°444',
    'libelle'=> "En marche arrière, peut-on rentrer dans un sens interdit ?
    a) Oui
    b) Non
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q444.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°445',
    'libelle'=> "La peinture jaune continue sur la bordure du trottoir signifie que :
        a) L‟arrêt et le stationnement sont interdits jusqu‟à la prochaine intersection
        b) L‟arrêt et le stationnement sont interdits à la hauteur de ce trottoir
        c) Seul l‟arrêt est autorisé
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q445.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°446',
    'libelle'=> "Après avoir heurté un cycliste, je freine et m‟arrête après 81 mètres. Je roulais donc à quelle
    vitesse ?
    a) 60 km/h
    b) 90 km/h
    c) 70 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q446.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°447',
    'libelle'=> "La distance de freinage dépend :
    a) Du type de revêtement
    b) Du temps de réaction
    c) De la vitesse
    d) De l‟état des pneumatiques
    e) De l‟état des amortisseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'acd',
    'filename'  => 'q447.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°448',
    'libelle'=> "Quels sont les facteurs qui augmentent le temps de réaction ?
    a) La fatigue
    b) L‟état d‟ivresse
    c) Le manque de visibilité
    d) L‟état des pneumatiques
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q448.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°449',
    'libelle'=> "Par temps de pluie, pour m‟arrêter j‟appuie sur la pédale de frein :
    a) Aussi fort que quand la chaussée est sèche
    b) Moins fort que quand la chaussée est sèche
    c) Plus fort que quand la chaussée est sèche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q449.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°450',
    'libelle'=> "Les zébras sont réservés pour :
    a) Le stationnement d‟urgence
    b) L‟arrêt d‟urgence
    c) Tourner et changer de direction
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q450.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



[
    'titre' => 'Question n°451',
    'libelle'=> "Je dois réduire ma vitesse :
    a) A la vue d‟un panneau de limitation de vitesse
    b) Pendant le dépassement
    c) En passant d‟une zone éclairée à une zone d‟ombre
    d) A la sortie d‟une agglomération
    e) A l‟approche d‟une intersection
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ace',
    'filename'  => 'q451.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°452',
    'libelle'=> "A la vue du panneau B43 :
    a) Je respecte une vitesse de 30 km/h obligatoirement
    b) Je peux faire plus de 30 km/h
    c) Je peux faire moins de 30 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q452.mp3',
    'extension' => 'mp3',
    'img' => '452.png',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°453',
    'libelle'=> "Quelles sont les précautions à prendre pour aborder un virage ?
    a) Garder la même vitesse pour vite aborder le virage
    b) Ralentir avant d‟aborder le virage
    c) Rouler au milieu de la chaussée avant d‟atteindre le virage
    d) Bien serrer la droite avant d‟aborder le virage
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename'  => 'q453.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 8,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°454',
    'libelle'=> "Que signifie le panneau B2c ?
    a) Interdit de tourner à gauche
    b) Interdit de faire marche arrière
    c) Interdit de faire demi-tour jusqu‟à la prochaine intersection incluse
    d) Interdit de faire marche arrière jusqu‟à la prochaine intersection
    incluse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q454.mp3',
    'extension' => 'mp3',
    'img' => '454.png',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°455',
    'libelle'=> "A la vue du panneau B6a1 :
    a) Je peux stationner avant ou après le panneau
    b) Je peux stationner après le panneau
    c) Je peux stationner avant le panneau
    d) Je ne peux stationner ni avant ni après le panneau
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q455.mp3',
    'extension' => 'mp3',
    'img' => '455.png',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°456',
    'libelle'=> "A la vue du panneau B21b :
    a) Je peux tourner à droite
    b) Je peux tourner à gauche
    c) Je peux faire demi-tour
    d) Je vais tout droit à la prochaine intersection
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q456.mp3',
    'extension' => 'mp3',
    'img' => '456.png',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°457',
    'libelle'=> "Que signifie le panneau B43
    a) Stationnement interdit à 30m devant le panneau
    b) Stationnement interdit à 30m après le panneau
    c) Fin de vitesse minimale obligatoire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q457.mp3',
    'extension' => 'mp3',
    'img' => '457.png',
    'sujet_id' => 2,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°458',
    'libelle'=> "La voie de stockage permet aux conducteurs de tourner :
    a) A gauche sans gêner les véhicules venant en sens inverse
    b) A droite sans gêner les véhicules venant en sens inverse
    c) Au milieu sans gêner les véhicules venant en sens inverse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q458.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°459',
    'libelle'=> "Sur les bandes et les pistes cyclables :
    a) Les automobilistes peuvent s‟arrêter pour prendre un passager
    b) Les piétons peuvent circuler
    c) Les autos peuvent stationner en cas de panne
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q459.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°460',
    'libelle'=> "Pour suivre un véhicule qui roule à 90 km/h l‟intervalle minimal de sécurité à conserver derrière
    ce véhicule est de :
    a) 10m environ
    b) 15m environ
    c) 25m environ
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q460.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°461',
    'libelle'=> "Il commence à pleuvoir, l‟adhérence de mes pneumatiques sur la chaussée est :
    a) Aussi bonne que s‟il avait plu toute la journée
    b) Moins bonne que s‟il avait plu toute la journée
    c) Meilleure que s‟il avait plu toute la journée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q461.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°462',
    'libelle'=> "La bifurcation, c‟est la division d‟une autoroute en :
        a) Quatre autoroutes
        b) Deux autoroutes
        c) Cinq autoroutes
        d) Trois autoroutes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q462.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°463',
    'libelle'=> "Le contrôle de la durée d‟un stationnement à une durée limitée peut se faire :
    a) Par horodateur
    100
    b) Par disque de stationnement
    c) Par parcmètre
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q463.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°464',
    'libelle'=> "La rétrogradation permet de :
    a) Ralentir le véhicule dans une descente
    b) Repartir après un ralentissement
    c) Arrêter le véhicule en circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a-b',
    'filename'  => 'q464.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°465',
    'libelle'=> "En marche normale :
    a) Je dois rouler au milieu de la chaussée
    b) Je dois rouler à gauche de la chaussée
    c) Je dois rouler près du bord droit de la chaussée autant que la permettent son profil et son
    état
    d) Je dois rouler sur le trottoir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q465.mp3',
    'extension' => 'mp3',
    'img' => '465.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°466',
    'libelle'=> "En cas d‟éclatement d‟un pneumatique :
    a) Je freine fortement pour m‟arrêter
    b) Je décélère progressivement en maintenant la trajectoire
    c) Je contre braque rapidement pour éviter une tête à queue
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q466.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°467',
    'libelle'=> "Le conducteur d'un véhicule qui dérape sur une chaussée glissante doit :
    a) Freiner fort pour stopper le véhicule
    b) Braquer calmement pour ramener le véhicule dans sa trajectoire
    c) Accélérer franchement pour redonner de l‟adhérence aux roues arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q467.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°468',
    'libelle'=> "Que signifie le panneau C12 ?
    a) Obligation d‟aller tout droit après le panneau
    b) Obligation d‟aller tout droit jusqu‟à la prochaine intersection
    c) Circulation à sens unique
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q468.mp3',
    'extension' => 'mp3',
    'img' => '468.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°469',
    'libelle'=> "Le stationnement est dangereux :
    a) Derrière les véhicules en stationnement
    b) A proximité d‟une intersection
    c) Sur les accotements
    d) Au sommet de côte
    e) Dans les virages
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'b-d-e',
    'filename'  => 'q469.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°470',
    'libelle'=> "A bord d‟un véhicule de tourisme pour, tourner à gauche sur une chaussée à double sens, je dois :
    a) Mettre le clignotant à gauche et céder le passage à droite
    b) Ralentir et serrer la gauche
    101
    c) Tourner sans respecter la priorité à droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q470.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°471',
    'libelle'=> "Comment accéder à l‟autoroute ?
    a) Par voie d‟accès
    b) Par voie de décélération
    c) Par voie d‟accélération
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a-c',
    'filename'  => 'q471.mp3',
    'extension' => 'mp3',
    'img' => '471.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°472',
    'libelle'=> "La route à grande circulation perd sa priorité :
    a) En agglomération
    b) A l‟entrée d‟une ville
    c) En dehors de l‟agglomération
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a-b',
    'filename'  => 'q472.mp3',
    'extension' => 'mp3',
    'img' => '472.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°473',
    'libelle'=> "Quelle est la vitesse maximale sur une route à grande circulation pour un candidat dont le permis a
    moins d‟un an d‟âge
    a) 60 km/h
    b) 90 km/h
    c) 120 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q473.mp3',
    'extension' => 'mp3',
    'img' => '473.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°474',
    'libelle'=> "A quoi sert la voie d‟accélération ?
    a) Permet d‟atteindre la vitesse minimale autorisée sur autoroute
    b) Permet de quitter l‟autoroute
    c) Permet de dépasser les usagers lents
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q474.mp3',
    'extension' => 'mp3',
    'img' => '474.png',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°475',
    'libelle'=> "Que signifie l‟arrêt d‟urgence ?
    a) Immobilisation forcée
    b) Arrêt pour faire descendre un passager
    c) Arrêt d‟autobus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q475.mp3',
    'extension' => 'mp3',
    'img' => '4',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°476',
    'libelle'=> "La bande d‟arrêt d‟urgence est utilisée :
    a) Pour s‟arrêter en cas de panne
    b) Pour s‟arrêter et prendre un passager
    c) Pour s‟arrêter en cas de malaise
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q476.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°477',
    'libelle'=> "Quelles sont les manœuvres interdites sur autoroute ?
    a) Dépassement
    b) Demi-tour
    c) Marche arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b-c',
    'filename'  => 'q477.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°478',
    'libelle'=> "Le panneau triangle pointe en bas au début d‟une voie d‟accélération :
    a) oblige les usagers circulant sur autoroute à me céder le passage
    b) oblige à céder le passage aux usagers de l‟autoroute
    c) oblige à marquer l‟arrêt
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q478.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°479',
    'libelle'=> "Les différentes parties d‟une rue sont :
        a) Chaussée, accotement
        b) Chaussée, terre-plein central, accotement
        c) Chaussée, trottoirs
        d) Terre plein-central, chaussée, trottoirs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q479.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°480',
    'libelle'=> "Le trottoir est la partie d‟une rue réservée :
    a) Pour les vendeuses
    b) Pour les piétons
    c) Pour le dépassement en cas de bouchon
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q480.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°481',
    'libelle'=> "La chaussée est la partie d‟une route réservée :
    a) A la circulation de gros camions uniquement
    b) A la circulation des véhicules
    c) A la circulation des taxis uniquement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q481.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°482',
    'libelle'=> "La voie est :
    a) Une partie de la chaussée ou le dépassement est possible
    b) Une partie de la chaussée réservée pour la circulation des véhicules
    c) Une partie de la chaussée réservée pour la circulation dans un sens
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q482.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°483',
    'libelle'=> "Où doit-on stationner en cas d‟ennui mécanique sur l‟autoroute ?
    a) Sur le terre- plein
    b) Sur la bande d‟arrêt d‟urgence
    c) Sur l‟aire de repos
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q483.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°484',
    'libelle'=> "La vitesse maximale autorisée sur une autoroute est :
    a) 90km/h
    b) 200km/h
    c) 60km/h
    d) Fonction de la législation en vigueur dans chaque pays
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q484.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°485',
    'libelle'=> "La vitesse maximale autorisée sur une route pour automobile est :
    a) 90km/h
    b) 130km/h
    c) 110km/h
    d) Fonction de la législation en vigueur dans chaque pays
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q485.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°486',
    'libelle'=> "La vitesse maximale autorisée sur une route pour automobile est :
    a) 90km/h
    b) 130km/h
    c) 110km/h
    d) Fonction de la législation en vigueur dans chaque pays
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q486.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°487',
    'libelle'=> "Je suis en panne de carburant sur l‟autoroute :
    a) Je vais à pied chercher du carburant à la station-service la plus proche
    b) Je me fais remorquer par un autre usager jusqu‟à la station-service la plus proche
    c) J‟utilise la cabine d‟appel d‟urgence pour me faire dépanner
    d) Je place mon triangle de pré-signalisation

    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q487.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°488',
    'libelle'=> "Mon véhicule tombe en panne sur l‟autoroute :
    a) je gare sur la bande d‟arrêt d‟urgence
    b) J‟attends un véhicule de dépannage
    c) Je fais du stop pour demander de l‟aide
    d) Je vais à pied jusqu'à la prochaine borne d‟appel
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename'  => 'q488.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°489',
    'libelle'=> "La circulation sur les bandes d‟arrêt d‟urgence de l‟autoroute est autorisée :
    a) Aux ambulances effectuant un transport urgent de blessés
    b) A tous les véhicules en cas d‟embouteillage
    c) Aux services d‟entretien se rendant sur un lieu d‟intervention
    d) Aux véhicules prioritaires en mission.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename'  => 'q489.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°490',
    'libelle'=> "Sur autoroute les bornes d‟appel d‟urgence sont placées à :
    a) tous les kilomètres
    b) tous les deux kilomètres
    c) tous les trois kilomètres
    d) tous les cinq kilomètres
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q490.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°491',
    'libelle'=> "Quel doit être le comportement d‟un conducteur à la sortie d‟une autoroute ?
    a- réduire sa vitesse
    b- se réadapter à la vitesse normale
    104
    c- tenir compte des intersections et de la présence des autres usagers
    d- utiliser son avertisseur sonore pour dégager la voie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q491.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°492',
    'libelle'=> "L‟accès à l‟autoroute est interdit à certaines catégories d‟usagers : lesquels ?
    a- piétons
    b- cyclomoteurs
    c- véhicules agricoles
    d- cavaliers
    e- véhicules lents
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcde',
    'filename'  => 'q492.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°493',
    'libelle'=> "Quels sont les usagers dont l‟accès à l‟autoroute est interdit ?
    a- piétons
    b- motocyclette
    c- cavaliers
    d- véhicules de tourisme
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q493.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°494',
    'libelle'=> "Pour effectuer un changement de voie à droite, je contrôle :
    a- le rétroviseur droit
    b- le rétroviseur gauche
    c- en vision directe, à droite
    d- le rétroviseur intérieur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename'  => 'q494.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°495',
    'libelle'=> "La circulation est établie en files, je peux changer de voie pour :
    a- prendre une voie qui circule plus vite
    b- préparer un changement de direction
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q495.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°496',
    'libelle'=> "Une jonction d‟autoroute est :
    a- Le raccordement de deux autoroutes
    b- La séparation d‟une autoroute en deux branches
    c- Le raccordement d‟une autoroute et d‟une voie d‟insertion
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q496.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°497',
    'libelle'=> "Une autoroute est toujours une route :
    a- A sens unique
    b- A trois voies de circulation
    c- Interdite aux piétons, cyclistes et cyclomotoristes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q497.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°498',
    'libelle'=> "Une voie pour véhicules lents est réservée :
    a- aux poids-lourds uniquement
    b- aux véhicules dont la vitesse est inférieure à 60km/h
    c- aux véhicules dont la vitesse est inférieure à 80 km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q498.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°499',
    'libelle'=> "Sur les chaussées d‟autoroute à 3 voies, il est permis de dépasser :
    a- Par la droite
    b- Par la gauche
    c- Du côté souhaité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q499.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°500',
    'libelle'=> "Les routes à accès règlementé sont toutes :
    a- A chaussées séparées et à sens unique
    b- A vitesse limité à 110 km/h
    c- A chaussées à double sens
    d- Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q500.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°501',
    'libelle'=> "Quels sont les types de stationnement ?
    a) Bataille – créneau – perpendiculaire
    b) Bataille – épi – créneau
    c) Epi – créneau – oblique
    d) En double file – épi – parallèle
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q501.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°502',
    'libelle'=> "A quoi sert le terre-plein central ?
    a) A stationner
    b) A exposer les marchandises
    c) A faire un demi-tour
    d) A séparer deux chaussées
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q502.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°503',
    'libelle'=> "En quittant le stationnement en marche normale pour intégrer la circulation, je dois :
    a) Utiliser le rétroviseur de droite
    b) Mettre le clignotant de gauche, utiliser le rétroviseur de gauche et m‟engager avec
    prudence
    c) M‟engager rapidement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q503.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' => 4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°504',
    'libelle'=> "En sortant d'un garage pour intégrer la circulation, je dois :
    a) Céder le passage aux usagers venant de la droite seulement
    b) Céder le passage aux usagers venant de la gauche seulement
    c) Céder le passage aux usagers venant de la droite et de la gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q504.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' => 4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°505',
    'libelle'=> "En sortant d‟un garage pour intégrer la circulation, quelle est la toute première précaution à
    prendre ?
    a) Jeter un coup d‟œil à gauche
    b) Klaxonner
    c) Jeter un coup d‟œil à droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q505.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°506',
    'libelle'=> "En descendant une pente, on doit utiliser :
    a) Le frein à pied seulement
    b) Le frein à pied et le frein moteur
    c) Le frein à pied et le frein à main
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q506.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°507',
    'libelle'=> "Dans une descente, le frein à moteur sera puissant si :
    a) Je reste en quatrième vitesse
    b) Je passe en cinquième vitesse
    c) Je passe en deuxième
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q507.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>4,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
// chapitre 5
[
    'titre' => 'Question n°508',
    'libelle'=> "Sur les lignes hachurées appelées zébras :
    a) Je peux stationner
    b) Je peux circuler
    c) Je ne peux ni circuler, ni stationner
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q508.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°509',
    'libelle'=> "On doit s‟abstenir de conduire :
    a) Si on est sous l‟effet des boissons alcoolisées ou des médicaments
    b) Si on vient de manger sans prendre de l‟alcool
    c) Si on est fatigué et somnolant
    d) Si on se sent nerveux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename'  => 'q509.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°510',
    'libelle'=> "Dans quel cas utiliser les avertisseurs sonores ?
    a) Pour avertir les autres usagers
    b) Pour rechercher les passagers
    c) Pour saluer les autres usagers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q510.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°511',
    'libelle'=> "A toute réquisition des forces de sécurité concernant mon véhicule je dois présenter :
    a) La carte grise
    b) Les papiers de dédouanement
    c) Le papier d‟achat
    d) L‟attestation d‟assurance
    e) La visite technique
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ade',
    'filename'  => 'q511.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°512',
    'libelle'=> "Les règles de circulation doivent être respectées par :
    a) Les motocyclistes
    b) Les piétons
    c) Les automobilistes seulement
    d) Les automobilistes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q512.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°513',
    'libelle'=> "Quand je suis sur le point d‟être dépassé, je dois :
    a) Accélérer
    b) Je serre ma droite sans accélérer
    c) M‟arrêter
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q513.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°514',
    'libelle'=> "Dans un véhicule à cinq places il y a infraction avec :
    a) 6 passagers adultes à bord
    b) 5 passagers adultes à bord
    c) 4 passagers adultes à bord
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q514.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°515',
    'libelle'=> "Une bonne conduite :
    a) Nécessite une attention soutenue de ma part
    b) M‟oblige à rouler tantôt à gauche tantôt à droite
    c) Me permet de tout regarder sur la route
    d) M‟oblige à éviter tous les trous.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q515.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°516',
    'libelle'=> "Quelle est l‟intervalle minimum de sécurité entre deux véhicules qui se suivent et roulants à
    50km/h :
    a) 10m environ
    b) 15m environ
    c) 20m environ
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q516.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°517',
    'libelle'=> "Les principaux facteurs d‟accident sont :
    a) une bonne tenue de route
    b) la fatigue
    c) le non respect des règles de circulation
    d) la vitesse excessive ou non adapté
    e) la conduite dans un état d‟ivresse.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'bcde',
    'filename'  => 'q517.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°518',
    'libelle'=> "En cas de traitement médical en cour et pour faire un long trajet, il est préférable :
    a) de modifier le traitement médical
    b) d‟arrêter le traitement médical
    c) de se renseigner auprès de son médecin
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q518.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°519',
    'libelle'=> "Que dois-je faire en présence d‟une flaque d‟eau sur la chaussée ?
    a) Accélérer
    b) Ralentir
    c) M‟arrêter
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q519.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°520',
    'libelle'=> "Quel serait votre comportement si le véhicule qui vous précède s'arrête subitement ?
    a) Je m'arrête et j'apprécie la situation
    b) Je dépasse rapidement le véhicule
    c) Je klaxonne
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q520.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°521',
    'libelle'=> "Dans un véhicule pour passagers, on peut transporter :
    a) des passagers et des marchandises
    b) des passagers et des animaux
    c) des passagers uniquement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q521.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°522',
    'libelle'=> "Au volant de son véhicule, passagers à bord, le conducteur :
    a) peut fumer
    b) peut discuter
    c) doit se concentrer sur la conduite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q522.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°523',
    'libelle'=> "En cas de crevaison, à défaut de cric et seul à bord de votre véhicule, vous pouvez :
    a) creuser la chaussée pour changer la roue crevée
    b) Soulever le véhicule pour changer la roue crevée
    c) Attendre d‟autres usagers de la route pour solliciter leur aide
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q523.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°524',
    'libelle'=> "En cas de panne sur la route et à défaut des triangles de pré signalisation, je peux utiliser :
    a) des touffes d‟herbes
    b) les feux de détresse
    c) la roue-secours
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q524.mp3',
    'extension' => 'mp3',
    'img' => '524.png',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°525',
    'libelle'=> "Lorsque les piétons sont engagés sur le passage clouté, je dois :
    a) leur céder le passage
    b) klaxonner pour les empêcher de traverser
    c) leur demander d‟attendre mon passage
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q525.mp3',
    'extension' => 'mp3',
    'img' => '525.png',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°526',
    'libelle'=> "Parmi les véhicules suivants, lesquels sont prioritaires :
    a) Les corbillards
    b) Les véhicules des sapeurs-pompiers en mission
    c) Les ambulances
    d) Les véhicules militaires
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q526.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°527',
    'libelle'=> "Parmi les véhicules suivants ; lesquels peuvent emprunter un sens interdit
    a) les véhicules de police en mission
    b) les corbillards
    c) les véhicules de SAMU en mission
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q527.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°528',
    'libelle'=> "Que dois-je faire à la vue d‟une personne traversant ou s‟apprêtant à s‟engager sur la chaussée,
    canne blanche levée ?
    a) Je passe rapidement
    b) Je m‟arrête pour la laisser passer
    c) Je klaxonne
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q528.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°529',
    'libelle'=> "Pour aider les enfants qui attendent pour traverser la rue :
    a) Je m‟arrête et leur adresse un signe de main
    b) Je ralentis et me tiens prêt à freiner si ces enfants se décident
    c) Je m‟arrête si aucun véhicule ne vient en sens inverse
    d) Je descends de ma voiture pour les aider à traverser
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q529.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°530',
    'libelle'=> "Je dois m‟abstenir de conduire :
    a) Sous l‟effet de boissons alcoolisées
    b) Sous l‟effet de la fatigue
    c) En cas de visibilité insuffisante grave
    d) En cas de chaussée rétrécie
    e) En cas de défaillance du câble compteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abc',
    'filename'  => 'q530.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°531',
    'libelle'=> "Comment réagir quand le conducteur venant d‟en face m‟éblouit, malgré mes appels de feux ?
    a) j‟allume et je reste en feu de route
    b) je me protège les yeux avec la main
    c) je ralentis au maximum et je m‟arrête au besoin
    d) je ralentis et je fixe le bord droit de la chaussée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q531.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°532',
    'libelle'=> "Quel est le comportement d‟un usager sur un lieu d‟accident ?
    a) Alerter, secourir et protéger
    b) Secourir, protéger et alerter
    c) Protéger, alerter et secourir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q532.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°533',
    'libelle'=> "Pour éteindre un début d‟incendie dans une voiture, j‟utilise :
    a) le sable uniquement
    b) l‟eau
    c) l‟extincteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q533.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°534',
    'libelle'=> "Pour baliser un lieu d‟accident, j‟utilise :
    a) Des balises
    b) Des branchages
    c) Des triangles de pré signalisation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q534.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°535',
    'libelle'=> "A quelle distance place-t-on ordinairement les triangles de pré-signalisation sur un lieu
    d‟accident ?
    a) à 30m au moins
    b) à 100m au moins
    c) à 200m au moins
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q535.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°536',
    'libelle'=> "A quelle catégorie d‟agents avez-vous recours en cas d‟accident en rase campagne ?
    a) Les sapeurs pompiers
    b) les gendarmes
    c) les douaniers
    d) les policiers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q536.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°537',
    'libelle'=> "Quand le blessé d‟un accident de circulation réclame à boire :
    a) je lui offre de l‟eau
    b) je lui offre de l‟alcool
    c) je lui offre du jus de fruit
    d) je ne lui donne rien
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q537.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°538',
    'libelle'=> "Quelles sont les causes qui peuvent être à l‟origine de la mort d‟un blessé avant l‟arrivée des
    secours ?
    a) L‟hémorragie
    b) La peur
    c) L‟asphyxie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q538.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°539',
    'libelle'=> "Comment arrêter l‟hémorragie externe ?
    a) en faisant un pansement alcoolisé
    b) en plaçant un garrot à longue durée
    c) en faisant un pansement compressif
    d) en faisant une pression directe sur la plaie avec un linge propre plié
    e) en appuyant sur les points de compression
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'cde',
    'filename'  => 'q539.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°540',
    'libelle'=> "Comment reconnaitre une personne asphyxiée ?
    a) Par l‟arrêt du mouvement du ventre et de la poitrine
    b) Par l‟arrêt du pouls
    c) Par le mouvement du ventre et de la poitrine
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q540.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°541',
    'libelle'=> "Comment réanimer une personne asphyxiée ?
    a) en desserrant les vêtements de la victime
    b) en pratiquant la respiration bouche à bouche après désobstruction des voies aériennes
    supérieures
    c) en pratiquant la respiration bouche à nez sans désobstruction des voies aériennes
    supérieures
    d) en mettant le blessé dans la Position Latérale de Sécurité (P.L.S.)
    e) en lui donnant à boire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abd',
    'filename'  => 'q541.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],[
    'titre' => 'Question n°542',
    'libelle'=> "Quels sont les signes qui apparaissent en cas d‟entorse ?
    a) douleur, gonflement, mouvements impossibles
    b) Douleur, saignement, mouvements possibles
    c) Douleur, gonflement, mouvements possibles
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q542.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°543',
    'libelle'=> "L‟hémorragie est :
    a) La sortie du sang hors des vaisseaux sanguins
    b) Une mauvaise circulation du sang
    c) Le passage du sang dans le cœur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q543.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],[
    'titre' => 'Question n°544',
    'libelle'=> "Il y a hémorragie externe lorsque le sang s‟écoule :
    a) D'un orifice naturel
    b) A l‟extérieur du corps par une plaie
    c) D'un orifice naturel ou à l‟extérieur du corps par une plaie
    d) A l‟intérieur du corps
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q544.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°545',
    'libelle'=> "Il y a hémorragie interne lorsque le sang s‟écoule :
    a) A l'extérieur du corps
    b) A l'intérieur du corps hors des vaisseaux
    c) A l'intérieur des vaisseaux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q545.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°546',
    'libelle'=> "En cas de brûlure grave par le feu, vêtements enflammés :
    a) Je déshabille la victime avant de l‟évacuer à l‟hôpital
    b) J'empêche la victime de courir, je l‟enroule dans une couverture et je l‟évacue à
    l'hôpital
    c) Je l'arrose de l'extincteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q546.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°547',
    'libelle'=> "En cas de brûlure par liquide bouillant ou par vapeur :
    a) Je déshabille la victime, je la douche le plus vite possible et je le fais évacuer vers un
    centre médical
    b) Je l'enroule de couverture
    c) Je l'évacue sans rien faire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q547.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°548',
    'libelle'=> "En cas de projection de l'acide de la batterie dans l‟œil d‟un individu :
    a) je rince l‟œil pendant au moins 10 minutes avec de l‟eau courante et je mets une
    compresse, puis je l‟évacue chez l'ophtalmologiste
    b) j'instille de l‟huile à frein sur l‟œil
    c) je bande l'œil
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q548.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°549',
    'libelle'=> "Pour effectuer le dégagement d‟urgence d‟un blessé de quelques mètres :
    a) je le roule par terre
    b) je le mets au dos
    c) je soulève légèrement sa tête, un aide le tire par les pieds en le glissant sur le sol dans l‟axe
    du corps
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q549.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°550',
    'libelle'=> "Quel est l‟utilité de la position latérale de sécurité (PLS) ?
    a) Elle permet d‟être couché sur le dos afin de bien respirer
    b) Elle permet de rester assis pour empêcher le choc
    c) Elle permet d‟être couché à plat ventre
    d) Elle permet à la victime d‟être couché sur le côté, d‟éviter la chute de la langue en
    arrière, l‟encombrement des voies respiratoires par le sang, le vomissement et la
    mucosité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q550.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°551',
    'libelle'=> "Quel est le but du massage cardiaque ?
    a) Il permet au malade d‟éviter le vertige
    b) Il permet au malade de bien respirer
    c) Il permet de réanimer une victime qui présente un arrêt circulatoire
    d) il permet d‟arrêter une hémorragie interne
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q551.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°552',
    'libelle'=> "Quand dit-on qu‟il y a luxation ?
    a) Lorsqu‟il y a étirement ou déchirure des ligaments
    b) Lorsqu‟il y a cassure d‟un os et qu‟il est en contact avec l‟extérieur
    c) Lorsque les ligaments sont déchirés, l‟articulation déboitée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q552.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°553',
    'libelle'=> "Quand dit-on qu‟il y a luxation ?
    a) Lorsqu‟il y a cassure d‟un os sans saignement
    b) Lorsque les ligaments sont déchirés, l‟articulation déboitée
    c) Lorsqu‟il y a étirement ou déchirure des ligaments, les surfaces articulaires restent en
    contact
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q553.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°554',
    'libelle'=> "Pour le ramassage d‟un blessé :
    a) Je dois remuer le blessé et le mettre débout
    b) Je dois mettre le blessé au dos
    c) Je dois le remuer le moins possible et respecter le bloc tête-cou-tronc
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q554.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°555',
    'libelle'=> "On appelle fracture :
    a) La rupture brutale d‟un os
    b) La douleur d‟un os
    115
    c) La sortie de l‟os dans l‟organisme
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'a',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q555.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°556',
    'libelle'=> "Il y a fracture fermée lorsque :
    a) Un os a un abcès
    b) Un os est cassé et prend contact avec l‟extérieur
    c) Un os est cassé et ne prend pas contact avec l‟extérieur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q556.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°557',
    'libelle'=> "Il y a fracture ouverte lorsque :
    a) Un os est courbé
    b) Un os est cassé et ne prend pas contact avec l‟extérieur
    c) Un os est cassé et prend contact avec l‟extérieur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q557.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°558',
    'libelle'=> "Quels peuvent être les signes révélateurs de fatigue au volant ?
    a) Maux de dents – picotements gastrique –lourdeurs des pieds et des bras
    b) lourdeur de tête – picotement des yeux – lourdeurs des paupières
    c) Maux d‟estomac – picotements de la peau – campes aux jambes
    d) Faim – soif – vertige
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q558.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°559',
    'libelle'=> "Secourir un accident de la route est-il obligatoire ?
    a) Oui
    b) Non
    c) Facultatif
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q559.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°560',
    'libelle'=> "Quel effet l‟alcool produit-il sur un conducteur ?
    a) Permet au conducteur de mieux voir
    b) Permet au conducteur de respecter le code de la route
    c) Ré duit les facultés mentales et physiques du conducteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q560.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°561',
    'libelle'=> "Quel est le bon comportement d‟un usager sur un lieu d‟accident :
    a) alerter – secourir – et protéger
    b) secourir – protéger – et alerter
    c) secourir – alerter – et protéger
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q561.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°562',
    'libelle'=> "Sur autoroute, je commets une infraction en m‟insérant sur l‟axe principal :
    a) si je fais ralentir un véhicule
    b) si j‟oblige un usager à changer de voie
    c) si je cède le passage à un usager circulant sur l‟axe principal
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q562.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°563',
    'libelle'=> "En cas d‟accident sur autoroute je peux prévenir les secours :
    a) à l‟aide des bornes d‟appel d‟urgence placées tous les 2km
    b) à l‟aide de mon téléphone portable en composant le numéro d‟un service
    secours
    c) avec l‟aide d‟un autre usager
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q563.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°564',
    'libelle'=> "Pour m‟installer à mon poste de conduite, dans l‟ordre :
    a) je mets la ceinture, je règle les rétroviseurs puis le siège
    b) je règle le siège puis les rétroviseurs et je mets la ceinture
    c) je règle les rétroviseurs puis le siège et je mets la ceinture
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q514.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°565',
    'libelle'=> "Titulaire du permis de conduire depuis 18mois, je peux rouler à :
    a) 80km/h
    b) 70km/h
    c) 60km/h
    d) 100km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q565.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°566',
    'libelle'=> "Le taux d‟alcoolémie est :
    a) le degré de l‟état d‟ivresse
    b) la quantité de bière dans le sang
    c) la quantité d‟alcool contenue dans un litre de sang
    d) la quantité de vin contenu dans le sang
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q566.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°567',
    'libelle'=> "Le dépistage de l‟alcoolémie se fait par :
    a) l‟air expiré par la bouche
    b) l‟alcotest
    c) la prise de sang
    d) l‟éthylotest
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename'  => 'q567.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°568',
    'libelle'=> "Le dosage de l‟alcoolémie se fait par :
    a) l‟alcooltest
    b) analyse de sang
    c) éthylomètre
    d) éthylotest
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q568.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°569',
    'libelle'=> "Quelle est la bonne position des mains au volant d‟un conducteur en marche normale, en
    considérant le volant comme le cadran d‟une montre
    a) 11h 05mn
    b) 9h 15mn
    117
    c) 7h 25mn
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q569.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°570',
    'libelle'=> "Au volant de mon véhicule je peux :
    a) recevoir un appel
    b) appeler un ami
    c) communiquer si mon portable est équipé d‟un écouteur
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q570.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°571',
    'libelle'=> "Au volant de mon véhicule je peux :
    a) manger
    b) boire
    c) fumer
    d) écouter la radio
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q571.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°572',
    'libelle'=> "Dans une agglomération éclairée je peux circuler :
    a) sans feux
    b) en feux de position
    c) en feux de croisement
    d) en feux de route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q572.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°573',
    'libelle'=> "Je peux être condamné pour délit de fuite si je ne m‟arrête pas après avoir :
    a) occasionné un accident matériel
    b) occasionné un accident corporel
    c) ignoré l‟injonction d‟un agent de force réglementant la circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q573.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°574',
    'libelle'=> "La vigilance au volant est dégradé si :
    a) Je téléphone
    b) Je mange un sandwich
    c) Je bavarde avec les passagers
    d) Je me concentre à la conduite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q574.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°575',
    'libelle'=> "La consommation de la drogue peut provoquer
    a) des effets d‟ivresse
    b) une diminution du champ visuel
    c) l‟euphorie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q575.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°576',
    'libelle'=> "Que doit faire un conducteur impliqué dans un accident de circulation ?
    a) dégager la chaussée après marquage pour ne pas gêner la circulation
    118
    b) avertir son assureur (compagnie d‟assurance)
    c) communiquer son identité (adresse) à toute personne impliquée dans
    l‟accident
    d) rester calme et courtois
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename'  => 'q576.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°577',
    'libelle'=> "Quel doit être le comportement d‟un conducteur vis-à-vis d‟un véhicule prioritaire en mission ?
    a) céder le passage aux intersections
    b) céder le passage aux intersections munies de feux tricolores
    c) faciliter leurs manœuvres, de croissement
    d) attendre l‟ordre d‟un agent règlementant la circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q577.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°578',
    'libelle'=> "Quels sont les signes évidents de la fatigue ?
    a- bâillement
    b- picotement des yeux
    c- somnolence
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q578.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°579',
    'libelle'=> "Quels sont les effets de la fatigue ?
    a- réaction tardive
    b- mauvaise analyse
    c- mauvaise appréciation des vitesses
    d- l‟impatience ou anxiété grandissante
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q579.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°580',
    'libelle'=> "Comment limiter la fatigue ?
    a- conduire sur une longue durée sans repos
    b- pendant le trajet se reposer régulièrement
    c- pratiquer l‟alternance au volant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q580.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°581',
    'libelle'=> "Quels sont les conditions nécessaires pour un déplacement sûr ?
    a- être en forme pour conduire
    b- avoir un véhicule en bon état de fonctionnement
    c- anticiper les situations critiques
    d- être courtois avec les autres usagers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename'  => 'q581.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°582',
    'libelle'=> "Quel comportement adopter pour une conduite économique ?
    a- choisir un bon style de conduite
    b- bien régler son moteur
    c- bon gonflage des pneus
    d- aérodynamisme bien adapté
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename'  => 'q582.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°583',
    'libelle'=> "Quel doit être le comportement d‟un conducteur impliqué dans un accident de circulation ?
    a- s‟arrêter après marquage
    b- dégager la chaussée pour ne pas gêner la circulation
    c- avertir sa compagnie d‟assurance
    d- communiquer son identité et son adresse à toute personne impliquée dans
    l‟accident
    e- conduire le véhicule au poste de police le plus proche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcd',
    'filename'  => 'q583.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°584',
    'libelle'=> "L‟alcool :
    a) diminue le champ de vision,
    b) réduit la vigilance
    c) allonge le temps de réaction
    d) Augmente le champ de vision
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q584.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°585',
    'libelle'=> "J‟ai plus de risque de rencontrer du verglas si je circule :
    a- en lisière d‟une forêt
    b- le long d‟un cours d‟eau
    c- à allure soutenue
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q585.mp3',
    'extension' => 'mp3',
    'img' =>  '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°586',
    'libelle'=> "Je dois allumer mes feux :
    a- Dès que le jour tombe
    b- Dès qu‟il fait nuit
    c- Dès qu‟il commence par pleuvoir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q586.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°587',
    'libelle'=> "Pour stationner de nuit dans une rue non éclairée en agglomération, j‟allume :
    a- Mes feux de croisement
    b- Mes feux de position
    c- Aucun feu pour ne pas décharger ma batterie
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q587.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°588',
    'libelle'=> "L‟absorption d‟alcool entraine une réduction :
    a- Du champ visuel
    b- Des capacités d‟analyse
    c- Du temps de réaction
    d- Des habiletés motrices
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename'  => 'q588.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°589',
    'libelle'=> "Les effets de l‟alcool apparaissent à partir de :
    a- 0,3g/l de sang
    b- 0,5g/l de sang
    c- 1,2g/l de sang
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q589.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°590',
    'libelle'=> "Conduire avec une alcoolémie de 0,5g/l de sang multiplie le risque d‟avoir un accident mortel :
    a- par dix
    b- par cinq
    c- par deux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q590.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°591',
    'libelle'=> "Pour faire redescendre à 0,5g/l, un taux d‟alcoolémie de 0,8g/l de sang, il faut en moyenne :
    a- 1 heure
    b- 2 heures
    c- 3 heures
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q591.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°592',
    'libelle'=> "L‟association alcool et médicaments peut augmenter :
    a- Le taux d‟alcoolémie
    b- Les effets de l‟alcool
    c- Le temps de réaction
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q592.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°593',
    'libelle'=> "Lors d‟un long trajet, il est conseillé de faire une pause d‟au moins 10minutes :
    a- Toutes les heures
    b- Toutes les deux heures
    c- Toutes les 4 heures
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q593.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°594',
    'libelle'=> "L‟alcoolémie atteint son maximum :
    a- Immédiatement après absorption
    b- Entre demi-heure et une heure après absorption
    c- Après deux heures
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b ',
    'filename'  => 'q594.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°595',
    'libelle'=> "La mesure exacte du taux d‟alcoolémie est effectuée si :
    a- Le dépistage est positif
    b- Le conducteur refuse le dépistage
    c- Le dépistage est négatif
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q595.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°596',
    'libelle'=> "Le contrôle d‟alcoolémie est systématique :
    a- Si l‟on est impliqué dans un accident corporel
    b- Lors des contrôles routiers
    c- Lors d‟un accident
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q596.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°597',
    'libelle'=> "Les conditions qui augmentent la fatigue sont :
    a- Le manque de sommeil
    121
    b- La visibilité réduite
    c- Une circulation fluide
    d- La conduite de nuit
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q597.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°598',
    'libelle'=> "Pour retarder l‟apparition de la fatigue, il faut :
    a- Boire beaucoup de café
    b- Etre bien installé au volant
    c- Prendre la route après un bon repos
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q598.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°599',
    'libelle'=> "En cas de fatigue, il faut :
    a- Marquer une pause
    b- Rouler plus lentement
    c- Rouler plus vite pour maintenir la vigilance
    d- Passer le volant à un passager
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q599.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°600',
    'libelle'=> "Lors d‟un accident, s‟il y a risque d‟incendie :
    a- Je débranche la batterie des véhicules
    b- Je maintien le contact des véhicules
    c- Je coupe le contact des véhicules
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q600.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°601',
    'libelle'=> "De nuit pour signaler un accident :
    a- J‟utilise les feux de mon véhicule
    b- Je fais des signes avec une lampe de poche
    c- Je place mes triangles de pré signalisation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q601.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°602',
    'libelle'=> "Lors d‟un accident le règlement à l‟amiable est :
    a- Obligatoire
    b- Facultatif
    c- Recommandé
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q602.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°603',
    'libelle'=> "L‟assurance minimum obligatoire :
    a- couvre les dommages occasionnés aux autres
    b- couvre les dégâts occasionnés aux véhicules seulement
    c- est aussi appelée assurance au x tiers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q603.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°604',
    'libelle'=> "Si je suis témoin d‟un accident, je dois :
    a- exposer ce que j'ai vu aux forces de l‟ordre‟
    b- remplir le contrat amiable
    c- déterminer les responsabilités
    d- laisser mes coordonnées pour un témoignage ultérieur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename'  => 'q604.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°605',
    'libelle'=> "En présence de blessés après un accident il faut :
    a- les couvrir
    b- pratiquer les gestes qui sauvent
    c- les faire boire pour éviter qu‟ils ne se déshydratent
    d- les transporter sur l‟accotement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q605.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°606',
    'libelle'=> "Lors de l‟alerte des secours, j‟indique :
    a- le lieu précis de l‟accident
    b- le numéro d'immatriculation des véhicules impliqués
    c- le nombre et le type de véhicules impliqués
    d- le nombre et l‟état des blessés
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename'  => 'q606.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°607',
    'libelle'=> "Protéger les lieux d‟un accident, c‟est :
    a- baliser les lieux pour éviter un autre accident
    b- dégager complètement la chaussée
    c- barrer complètement la voie aux autres véhicules
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q607.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°608',
    'libelle'=> "Après avoir déplacé un blessé, je le mets allongé sur:
    a- le coté
    b- le dos
    c- le ventre
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q608.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°609',
    'libelle'=> "Si mon véhicule est immobilisé dangereusement sur la chaussée, je le déplace de préférence :
    a- en le poussant
    b- en enclenchant la 1ère ou la marche en arrière et en actionnant le démarreur
    c- en faisant appel à des secours
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q609.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°610',
    'libelle'=> "La présence à bord d‟une boîte d‟ampoule et de fusible de recharge est :
    a- obligatoire
    b- recommandée
    c- inutile
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q610.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°611',
    'libelle'=> "Le réglage de la hauteur des faisceaux lumineux du véhicule :
    a- dépend de la charge du véhicule
    123
    b- nécessite toujours l‟intervention d‟un spécialiste
    c- est effectué une fois pour toutes lors de la mise en circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q611.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°612',
    'libelle'=> "Pour remplir le réservoir de mon lave glace, j‟utilise de préférence :
    a- de l‟eau uniquement
    b- un produit détergent spécial
    c- un détergent ménager
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q612.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°613',
    'libelle'=> "Je dois faire vérifier l‟équilibrage des roues de mon véhicule :
        a- après un choc violent contre un trottoir
        b- en cas d‟usure anormale de mes pneus
        c- je ressens des vibrations au niveau du volant
        d- si mon véhicule se déporte au freinage
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename'  => 'q613.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°614',
    'libelle'=> "Parmi ces équipements, ceux qui déchargent le plus la batterie sont :
    a- l‟autoradio
    b- les feux
    c- le système dégivrage de la lunette arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q614.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°615',
    'libelle'=> "Pour économiser du carburant, il faut :
    a- faire entretenir régulièrement son véhicule
    b- éviter de rouler avec une galerie vide sur le toit
    c- rouler le plus souvent possible en sous régime
    d- avoir les pneus bien gonflés
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q615.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°616',
    'libelle'=> "Je dois faire vérifier le parallélisme des roues de mon véhicule :
        a- après un choc violent
        b- en cas d‟usure de mes pneus
        c- si je ressens des vibrations au niveau du volant
        d- si mon véhicule se déporte
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q616.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°617',
    'libelle'=> "L‟installation au poste de conduite influence :
    a- la vision
    b- le confort
    c- la tenue de route
    d- la manipulation des commandes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q617.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°618',
    'libelle'=> "Il est indispensable de regarder dans ses rétroviseurs avant de :
    124
    a- modifier sa trajectoire
    b- activer ses clignotants
    c- modifier son allure
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q618.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°619',
    'libelle'=> "Les appels lumineux servent à signaler :
    a- une intention de dépasser
    b- la présence de gendarmes
    c- l‟approche à une intersection la nuit
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a-c',
    'filename'  => 'q619.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°620',
    'libelle'=> "Je peux utiliser l‟avertisseur sonore pour :
    a- avertir de ma présence un usager qui ne me regarde pas
    b- signaler à un usager qu‟il vient de commettre une faute
    c- Passer lorsque j‟ai la priorité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q620.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°621',
    'libelle'=> "L‟usage de l‟avertisseur sonore est interdit :
    a- la nuit, uniquement en agglomération
    b- la nuit, en agglomération et hors agglomération
    c- le jour en agglomération sauf danger immédiat
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q621.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°622',
    'libelle'=> "Avant de monter abord ou de descendre de mon véhicule je dois :
    a- m‟assurer qu‟il n‟y aucun risque
    b- contrôler que ma position ne gêne d‟autres usagers
    c- tenir compte les mouvements des autres usagers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q622.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°623',
    'libelle'=> "Lorsque la visibilité est réduite :
    a- je ralentis pour pouvoir m‟arrêter le cas échéant
    b- je ne ralentis pas car cela n‟améliore pas la visibilité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q623.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°624',
    'libelle'=> "Lors d‟un départ en cote, il faut desserrer le frein à main :
    a- avant de commencer à embrayer
    b- dès que l‟on a trouvé le point de patinage
    c- dès que l‟on a fini d‟embrayer
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q624.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°625',
    'libelle'=> "Lors d‟un arrêt en circulation, pour éviter de caler le moteur il faut :
    a- débrayer dès le début du freinage
    b- débrayer en fin de freinage seulement
    c- débrayer avant de freiner
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q625.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°626',
    'libelle'=> "Les mains sur le volant sont placées correctement sur le dessin :
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename'  => 'q626.mp3',
    'extension' => 'mp3',
    'img' => '626.png',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°627',
    'libelle'=> "La rétrogradation permet :
    a- de ralentir le véhicule dans une descente
    b- de répartir après un ralentissement
    c- d‟arrêter le véhicule en circulation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q627.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°628',
    'libelle'=> "Le frein moteur intervient dès qu‟on :
    a- lâche l‟accélérateur
    b- appuie sur la pédale de frein
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q628.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°629',
    'libelle'=> "LA bord d‟un véhicule de tourisme, pour effectuer une marche arrière, j‟aurai une meilleure vision :
    a- si je me retourne bien
    b- si je me retourne peu
    c- si j‟utilise mes 3 rétroviseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q629.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°630',
    'libelle'=> "Il est dangereux d‟effectuer un demi-tour :
    a- dans un virage
    b- lorsque la circulation est dense et rapide
    c- dans une rue sans issue
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a-b',
    'filename'  => 'q630.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°631',
    'libelle'=> "La fatigue et la perte de vigilance sont accrues par :
    a- une vitesse modérée
    b- la conduite de nuit
    c- une dette de sommeil
    d- la prise de caféine
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b-c',
    'filename'  => 'q631.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°632',
    'libelle'=> "Pendant l‟arrêt au feu rouge :
    a- je peux rapidement prendre un appel téléphonique
    b- je peux rapidement passer un appel téléphonique avant le feu vert
    c- je ne dois toucher au téléphone
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q632.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°633',
    'libelle'=> "Au volant de mon véhicule, je peux utiliser mon téléphone portable
    a- lorsque je me retrouve seul sur la chaussée
    b- lorsque je ne suis pas sur une route à grande circulation
    c- lorsque je suis équipé d‟un kit oreillette en cas d‟urgence
    d- lorsqu‟il y a urgence
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q633.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°634',
    'libelle'=> "Au volant de mon véhicule, mon téléphone portable sonne :
    a- j‟arrête mon véhicule convenablement avant de toucher au téléphone
    b- je ne dois pas toucher au téléphone
    c- je prends le téléphone pour vérifier mon correspondant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q634.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°635',
    'libelle'=> "Je commets un délit de fuite si je ne m‟arrête pas :
    a) Lorsque je suis témoin d‟un accident
    b) Lorsqu‟un agent de sécurité me fait signe de m‟arrêter
    c) Lorsque je suis impliqué dans un accident
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q635.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°636',
    'libelle'=> "Je dois m‟abstenir de conduire :
    a) Si je prends un verre de jus de raisin
    b) Si je suis sous l‟effet de boissons alcoolisées ou de certains médicaments
    c) Si je suis fatigué
    d) Si je me sens nerveux ou surexcité
    e) Après un bon sommeil.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'bcd',
    'filename'  => 'q636.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°637',
    'libelle'=> "L‟absorption d‟alcool :
    a) Permet de bien conduire
    b) Augmente le temps de réaction
    c) Permet de bien apprécier les distances
    d) Augmente le champ visuel
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q637.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°638',
    'libelle'=> "On peut passer le feu rouge allumé à une intersection munie de feux tricolores :
    a) Quand on s‟y retrouve seul
    b) Quand on s‟y retrouve seul tard dans la nuit
    c) A aucun moment
    d) Si je veux tourner à droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q638.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°639',
    'libelle'=> "Avant de me mettre au volant :
    a) Je peux prendre de l‟alcool
    b) Je peux prendre de l‟alcool sans me soûler
    c) Je dois m‟abstenir de prendre de l‟alcool
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q639.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°640',
    'libelle'=> "Je suis titulaire du permis de conduire :
    a) Je peux conduire sans l‟avoir sur moi
    b) Je conduis toujours avec mon permis de conduire
    c) Je peux conduire avec une photocopie légalisée de mon permis de conduire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q640.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°641',
    'libelle'=> "En cas de retrait de votre permis de conduire suite à une infraction ou à un accident, je dois :
    a) Me présenter à la gendarmerie pour reprendre le permis de conduire
    b) Me présenter au Centre National de Sécurité Routière pour les dispositions de
    reprise de mon permis de conduire
    c) Me présenter au maire de la commune où l‟accident a eu lieu pour le retrait de mon
    permis de conduire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q641.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°642',
    'libelle'=> "La Commission Nationale de Retrait de Permis de Conduire est chargée :
    a) D‟auditionner le(s) mise(s) en cause, de décider du retrait partiel ou définitif du
    Permis de conduire et de sensibiliser
    b) D‟écouter simplement les conducteurs d véhicules impliqués dan les accidents
    c) De décider du payement des dommages causés par l‟accident survenu
    d) De l‟emprisonnement du conducteur impliqué dans un accident mortel
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q642.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°643',
    'libelle'=> "Après le retrait de mon permis de conduire suite à un accident, je peux :
    a) Procéder au remplacement de mon permis de conduire
    b) Demander le duplicata du permis de conduire
    c) Continuer à conduire mon véhicule avec un certificat de perte
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q643.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°644',
    'libelle'=> "Les travaux de la Commission Spéciale de Retrait de permis de conduire sont organisés par :
    a) La Direction Générale des Transports Terrestres
    b) La Direction Générale des Travaux Publics
    c) La Gendarmerie
    d) Le Centre National de Sécurité Routière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q644.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°645',
    'libelle'=> "L‟original du permis de conduire retiré par les Forces de Sécurité Publique suite à un accident est
    transmis :
    a) Au parquet
    b) Au Centre National de Sécurité Routière
    c) La Direction Générale des Transports Terrestres
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q645.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>5,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],




/// Debut chapitre  6
[
    'titre' => 'Question n°646',
    'libelle'=> "Sur une motocyclette, le passager :
    a) Peut-être assis devant le conducteur
    b) Peut-être assis dans la position dite « en amazone »
    c) Doit être assis sur le siège arrière
    d) Doit faire corps avec la moto et son conducteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q646.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°647',
    'libelle'=> "En cas de panne de ma motocyclette :
    a) Je peux trainer ma moto sur le trottoir, le moteur arrêté
    b) Je ne peux pas trainer ma moto sur le trottoir, le moteur arrêté
    c) Je peux la garer sur le trottoir et attendre un dépanneur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q647.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°648',
    'libelle'=> "Dans une circulation en files ininterrompues :
    a) Je peux me faufiler entre les véhicules
    b) Je peux me faufiler entre les véhicules si la circulation s‟arrête
    c) Je dois rester dans ma file sauf pour préparer un changement de direction
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q648.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°649',
    'libelle'=> "Avec mon véhicule à deux roues, je peux traverser une voie ferrée :
    a) En passant par le portillon d‟une barrière fermée avant le passage d‟un train
    b) En passant les demi-barrières fermées avant le passage du train
    c) Après le relèvement de la barrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q649.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°650',
    'libelle'=> "Le clignotant est obligatoire :
    a) Pour les cyclomoteurs
    b) Pour les motocyclettes
    c) Pour tous les véhicules à deux roues
    d) Pour les automobiles seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q650.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°651',
    'libelle'=> "Avec mon permis de conduire catégorie A1, je peux conduire des motocyclettes dont la cylindrée
    a) N‟excède pas 75cm3
    b) Excède 75cm3
    c) Est égale à 100cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q651.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°652',
    'libelle'=> "Avec mon permis de conduire catégorie A2, je peux conduire des motocyclettes dont la cylindrée
    a) N‟excède pas 450cm3
    b) Excède 400cm3
    c) Est inférieur à 400cm3
    d) Est égale à 400cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename'  => 'q652.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°653',
    'libelle'=> "Avec mon permis de conduire catégorie A3, je peux conduire des motocyclettes dont la cylindrée
    a) N‟excède pas 450cm3
    b) Excède 400cm3
    c) Est inférieure à 400cm3
    d) Est égale à 400cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename'  => 'q653.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°654',
    'libelle'=> "Quels sont les contrôles de niveau à effectuer avant le départ sur les motocyclettes dont la
    cylindrée est supérieure ou égale à 400cm3 ?
    a) Niveau d‟huile à moteur
    b) Eau dans le radiateur
    c) Essence dans le réservoir
    d) Eau du bocal de l‟essuie-glace
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename'  => 'q654.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°655',
    'libelle'=> "Dans quelle position met-on la motocyclette pour effectuer les contrôles de niveau ?
    a) Sur la béquille centrale
    b) Sur la béquille latérale
    c) Couchée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q655.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°656',
    'libelle'=> "En longeant les véhicules en stationnement, à quoi doit-on faire attention ?
    a) Aux piétons qui pourraient surgir
    b) Aux véhicules qui pourraient surgir
    c) Aux portières qui pourraient s‟ouvrir
    d) Aux véhicules qui pourraient quitter leur stationnement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename'  => 'q656.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°657',
    'libelle'=> "Les précautions à prendre pour la conduite d‟une nouvelle motocyclette :
    a) S‟habituer progressivement
    b) Augmenter la distance de sécurité
    c) Réduire la distance de sécurité
    d) Adopter une bonne position de conduite, de freinage et de tenue de route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q657.mp3',
    'extension' => 'mp3',
    'img' => '657.png',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°658',
    'libelle'=> "Quels sont les contrôles à effectuer avant chaque départ ?
    a) Position des béquilles
    b) Bon ajustement du casque (conducteur et passager)
    c) Resserrage des rayons
    d) Réglage des rétroviseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q658.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°659',
    'libelle'=> "Quels sont les différents types de casques pour les motocyclettes et les cyclomoteurs ?
    a) Casque à couverture ignifugée
    b) Casque intégral
    c) Casque enveloppant
    d) Casque étoilé
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q659.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°660',
    'libelle'=> "Quelle est la bonne position d‟un conducteur à motocyclette ?
    a) Etre bien assis sur la selle
    b) Avoir les bras légèrement fléchis
    c) Avoir le cou raide
    d) Garder les genoux contre le réservoir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename'  => 'q660.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°661',
    'libelle'=> "Quel est l‟âge minimum pour un candidat à l‟examen du permis de conduire A1
    a) 14ans
    b) 16ans
    c) 17ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q661.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°662',
    'libelle'=> "Le feu stop est obligatoire :
    a) Sur les cyclomoteurs
    b) Sur les motocyclettes
    c) Sur tous les véhicules à deux roues
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q662.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°663',
    'libelle'=> "Le rétroviseur est-il obligatoire pour les motocyclettes ?
    a) Oui
    b) Non
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q663.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°664',
    'libelle'=> "Combien de passagers un conducteur de deux roues peut-il transporter ?
    a) deux
    b) un
    c) trois
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q664.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°665',
    'libelle'=> "Le port de casque est obligatoire sur les véhicules à deux roues :
    a) Seulement quand je remorque un passager
    b) Si je suis seul
    c) Pour tous les occupants
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q665.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°666',
    'libelle'=> "Le port de casque protège contre :
    a) Le soleil et la pluie
    b) Le traumatisme crânien
    c) La poussière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q666.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°667',
    'libelle'=> "Quel est l‟âge minimum du candidat à l‟examen de permis de conduire A2 ?
    a) 15ans
    b) 20ans
    c) 18ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q667.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°668',
    'libelle'=> "Pour le transport d‟un enfant de moins de 5ans sur une motocyclette il faut :
    a) Avoir un simple siège
    b) Avoir un siège muni de courroie-attache
    c) Bien régler son casque
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q668.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°669',
    'libelle'=> "Quel est l‟âge minimum pour un candidat à l‟examen de permis de conduire A3 ?
    a) 17ans
    b) 18ans
    c) 21ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q669.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°670',
    'libelle'=> "Que signifie le panneau A21b ?
    a) Voie réservée au cycliste
    b) Voie interdite au cycliste
    c) Débouché de cycliste venant de gauche seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q670.mp3',
    'extension' => 'mp3',
    'img' => '670.png',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°671',
    'libelle'=> "Sur ma moto, à la vue du panneau B14(3) hors agglomération :
    a) Je peux rouler à plus de 60km/h
    b) Je peux rouler à moins de 60km/h
    c) Je peux rouler à 60km/h strictement
    d) Je ne suis pas concerné par cette signalisation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q671.mp3',
    'extension' => 'mp3',
    'img' => '671.png',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°672',
    'libelle'=> "Le panneau B14-3 :
    a) concerne uniquement les conducteurs à moto
    b) concerne tous les conducteurs sauf les motocyclistes
    c) concerne aussi les 4 roues
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q672.mp3',
    'extension' => 'mp3',
    'img' => '672.png',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°673',
    'libelle'=> "Le port de casque est obligatoire :
    a) seulement en rase campagne ou la grande vitesse est possible
    b) seulement en ville à cause du grand nombre de véhicules
    c) seulement sur les voies pavées ou bitumées
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q673.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°674',
    'libelle'=> "La circulation à deux de front pour les véhicules à deux roues :
    a) Est autorisée sur les chaussées à double sens de circulation
    b) Est autorisée sur les chaussées à sens unique de circulation
    c) N‟est pas autorisée
    d) Est autorisée seulement sur les voies réservées aux véhicules à deux roues
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q674.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°675',
    'libelle'=> "Avec mon permis de conduire catégorie A2, je peux conduire des motocyclettes dont la cylindrée
    n‟excède pas :
    a) 200cm3
    b) 400cm3
    c) 600cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename'  => 'q675.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°676',
    'libelle'=> "Les motocyclettes sont des véhicules à deux roues :
    a) Avec moteur auxiliaire
    b) Pourvus d‟un moteur thermique
    c) Dont la cylindrée ne dépasse pas 50cm3
    d) Dont la cylindrée dépasse 50cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename'  => 'q676.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°677',
    'libelle'=> "Les cyclomoteurs sont des véhicules à deux roues :
    a) Pourvus d‟un moteur thermique
    b) Dont la cylindrée ne dépasse pas 50cm3
    c) Dont la cylindrée dépasse 50cm3
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q677.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°678',
    'libelle'=> "Sont obligatoires sur les motocyclettes :
    a) Les avertisseurs
    b) les deux rétroviseurs
    c) le rétroviseur gauche
    d) le rétroviseur droit
    e) le frein avant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ace',
    'filename'  => 'q678.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>6,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

// chapitre 7
[
    'titre' => 'Question n°679',
    'libelle'=> "Pour tourner à droite je dois :
    a) Accélérer
    b) Mettre le clignotant
    c) Ralentir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q679.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°680',
    'libelle'=> "Pour tourner à gauche sur une chaussée à double sens je dois :
    a) Serrer ma droite
    b) Me déporter au milieu
    c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q680.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°681',
    'libelle'=> "Le PTAC de ma remorque est de 800kg ; le poids à vide de ma voiture est 700kg :
    a) pour tracter ma remorque je dois détenir le permis E (B)
    b) je dois mettre à l‟arrière de ma remorque une plaque d‟immatriculation
    identique à celle de ma voiture
    c) pour tracter ma remorque je dois détenir le permis C
    d) ma remorque doit porter sa propre plaque d‟immatriculation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename'  => 'q681.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°682',
    'libelle'=> "A la vue du panneau B14 :
    a) Je peux rouler à plus de 50km/h
    b) Je ne peux pas rouler à moins de 50km/h
    c) Je peux rouler à 50km/h strictement
    d) Je ne suis pas concerné pas cette signalisation
    e) Je peux rouler à moins de 50km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ce',
    'filename'  => 'q682.mp3',
    'extension' => 'mp3',
    'img' => '682.png',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°683',
    'libelle'=> "Avec mon permis de conduire catégorie B :
    a) je peux conduire un véhicule dont le PTAC est inférieur ou égal à 3,5T
    b) je peux conduire tous les véhicules
    c) je ne peux conduire que les véhicules dont le PTAC est compris entre 3,5T et 18T
    d) je peux conduire une camionnette dont le PTAC est égal ou inférieur à 3,5T
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename'  => 'q683.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°684',
    'libelle'=> "Avec le permis de conduire catégorie B, je peux conduire un véhicule :
    a) poids lourd
    b) autobus
    c) poids léger
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q684.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°685',
    'libelle'=> "Ma voiture mesure 4m de long, comment transporter de jour, une échelle de 5m ?
    a) Je fais dépasser l‟échelle de 0,5m à l‟avant et 0,5m à l‟arrière
    b) Je fais dépasser l‟échelle de 1m à l‟avant
    c) Je fais dépasser l‟échelle de 1m à l‟arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q685.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°686',
    'libelle'=> "Mon permis de conduire a 8mois d‟âge, je ne peux rouler à plus de :
    a) 100km/h
    b) 120km/h
    c) 90km/h
    d) 60km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q686.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°687',
    'libelle'=> "A la vue du panneau B14 :
    a) Je peux rouler à plus de 50km/h
    b) je peux rouler à moins de 50km/h
    c) Je peux rouler à 50km/h strictement
    d) Je ne suis pas concerné pas cette signalisation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q687.mp3',
    'extension' => 'mp3',
    'img' => '687.png',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°688',
    'libelle'=> "La remorque doit avoir sa propre carte grise si le PTAC est supérieur à :
    a) 450kg
    b) 500kg
    c) 400kg
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q688.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' => 7,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


/// chapitre 8
[
    'titre' => 'Question n°689',
    'libelle'=> "Quel est l‟âge minimal du candidat au permis de conduire catégorie C1 ?
    a) 17ans
    b) 18ans
    c) 20ans
    d) 21ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q689.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°690',
    'libelle'=> "Pour les transports exceptionnels la réglementation (concernant les pièces de grande longueur)
    prévoit que le chargement du véhicule isolé peut déborder de :
    a) 3m au plus à l‟avant et 5m à l‟arrière
    b) 4m au plus à l‟avant et 7m à l‟arrière
    c) 0m à l‟avant et 6m à l‟arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename'  => 'q690.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°691',
    'libelle'=> "Un véhicule articulé est composé :
    a) d‟un véhicule tracteur et d‟une remorque
    b) d‟un véhicule tracteur et d‟une semi- remorque
    c) d‟un véhicule tracteur routier et d‟une semi-remorque
    d) d‟un véhicule tracteur routier et d‟une remorque
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q691.mp3',
    'extension' => 'mp3',
    'img' => '691.png',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°692',
    'libelle'=> "Un train double est composé :
    a) d‟un tracteur et d‟une remorque
    b) d‟un tracteur routier et de deux semi-remorques
    c) d‟un véhicule articulé et d‟une semi-remorque
    d) d‟un tracteur et d‟une semi-remorque
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q692',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°693',
    'libelle'=> "La longueur d‟un véhicule articulé peut atteindre :
    a) 22m
    b) 26m
    c) 16,5m
    d) 18m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q693.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°694',
    'libelle'=> "Quel est l‟âge minimal du candidat au permis de conduire catégorie C ?
    a) 17ans
    b) 18ans
    c) 21ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q694.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°695',
    'libelle'=> "Les véhicules dont le PTAC dépasse 3,5T doivent être munis d‟un appareil de contrôle appelé :
    a) Totaliseur
    b) Chrono tachygraphe
    c) Ethylotest
    d) Un contrôleur de pression des pneus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q695.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°696',
    'libelle'=> "Le chrono tachygraphe permet l‟enregistrement
    a) Des tours des roues avant
    b) De la vitesse du véhicule et la distance parcoure
    c) Du temps de conduite et de repos
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename'  => 'q696.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°697',
    'libelle'=> "Pour conduire un véhicule de transport de marchandises ou de matériels dont le PTAC est compris
    entre 3,5 et18T, je dois :
    a) Etre titulaire du permis de conduire catégorie B
    b) Etre titulaire du permis de conduire catégorie B et E
    c) Etre titulaire du permis de conduire catégorie C
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q697.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°698',
    'libelle'=> "Quel intervalle minimal entre deux véhicules poids lourds de plus de 7m de long qui se suivent,
    doivent-ils respecter lorsqu‟ils roulent à la même vitesse ?
    a) 20m
    b) 30m
    c) 90m
    d) Rien de tout cela
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename'  => 'q698.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],
[
    'titre' => 'Question n°699',
    'libelle'=> "Avant d‟aborder une descente rapide avec mon véhicule poids lourd, je dois :
    a) Mettre le véhicule au point mort et freiner
    b) Rétrograder et utiliser au maximum le frein moteur
    c) Rester à la même vitesse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename'  => 'q699.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°700',
    'libelle'=> "A bord d‟un véhicule poids lourd et pour une hauteur de 4ou 5m du sol chargement compris, je
    dois :
    a) Circuler sans aucune précaution
    b) Circuler en jetant des coups d‟œil sur les installations et passer
    c) M'assurer que je peux circuler sans causer de dommage aux ouvrages d‟art, aux
    installations aériennes situés au-dessus des voies publiques
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename'  => 'q700.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



[
    'titre' => 'Question n°701',
    'libelle'=> "Quelle longueur maximale peut atteindre le porte-à-faux arrière d‟un véhicule poids lourd ou de
    transport en commun ?
    a) 3,5m
    b) 5m
    c) 2m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q701.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°702',
    'libelle'=> "A quoi sert le ralentisseur sur un véhicule poids lourd ?
    a) Permet de descendre à une allure réduite dans une longue et forte pente
    b) Permet de freiner
    c) Permet de s‟arrêter
    d) Permet d‟éviter l‟usure précoce des tambours et des garnitures
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q702.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°703',
    'libelle'=> "Le chargement de grande longueur peut dépasser l‟extrémité avant du véhicule de :
    a) 1m
    b) 0m
    c) 1,5m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q703.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°704',
    'libelle'=> "Le chargement de grande longueur peut dépasser au maximum l‟extrémité arrière du véhicule de :
    a) 3m
    b) 5m
    c) 3,5m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q704.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°705',
    'libelle'=> "Pour tourner à droite sur une chaussée à sens unique, je dois :
    a) Serrer ma droite
    b) Serrer ma gauche
    c) Me déporter au milieu
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q705.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



[
    'titre' => 'Question n°706',
    'libelle'=> "Pour tourner à gauche sur une chaussée à sens unique, je dois
    a) Serrer ma droite et mettre le clignotant à gauche
    b) Respecter les règles de priorité
    c) Serrer ma gauche et mettre le clignotant à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q706.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°707',
    'libelle'=> "Avec mon permis de conduire de la catégorie C :
    a) Je peux conduire un véhicule de 15tonnes, chargement compris
    b) Je peux conduire un véhicule de 20tonnes, chargement compris
    c) Je peux conduire un minicar de 15places
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q707.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°708',
    'libelle'=> "Avec mon permis de conduire de la catégorie C1 :
    a) Je peux conduire un car de 50 places
    b) Je peux conduire un véhicule de 36tonnes, chargement compris
    c) Je peux conduire un véhicule de 7tonnes, chargement compris
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q708.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°709',
    'libelle'=> "Sur une pente, quel est le véhicule qui doit faciliter le passage lors d‟un croisement difficile ?
    a) L'autobus
    b) Le camion
    c) le véhicule qui le désire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q709.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°710',
    'libelle'=> "Que faut-il faire pour éviter de polluer l‟environnement par le gaz de votre moteur ?
    a) Bien régler les injecteurs de mon moteur
    b) Utiliser un carburant de bonne qualité
    c) Rouler à vive allure
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q710.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°711',
    'libelle'=> "Les feux de gabarit sont obligatoires sur les véhicules de largeur supérieure ou égale à :
    a) 2,10m
    b) 2,15m
    c) 2,20m
    d) 1,80m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q711.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°712',
    'libelle'=> "Sur cette image PN2 le camion doit :
    a) faire un demi-tour si sa hauteur est supérieure à 4,5m
    b) ralentir, vérifier la gauche et la droite puis passer si sa hauteur ne dépasse pas 4,5m
    c) passer sans danger
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q712.mp3',
    'extension' => 'mp3',
    'img' => '712.PNG',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°713',
    'libelle'=> "Les feux d'encombrement :
    a) Sont toujours de couleur jaune
    b) Sont de couleur blanche à l'avant
    c) Eclairent à 400m
    d) Sont de couleur rouge à l'arrièr
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename' => 'q713.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°714',
    'libelle'=> "L'intervalle de sécurité entre deux véhicules de plus de 7mètres de long permet :
    a) D'éviter le choc en cas de freinage
    b) De faciliter aux véhicules légers le dépassement
    c) De mieux contrôler les organes de conduite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q714.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°715',
    'libelle'=> "Sur la chaussée comportant trois (3) voies affectées à un même sens de circulation, les véhicules
    de 3,5T de PTAC et de plus de 7m de long doivent normalement :
    a) Emprunter toutes les voies
    b) Emprunter la voie de droite
    c) Emprunter les deux voies les plus à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q715.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°716',
    'libelle'=> "Un véhicule articulé est composé :
    a) d'un véhicule tracteur et d'une remorque
    b) d'un véhicule tracteur et d'une semi-remorque
    c) d'un véhicule tracteur routier et d‟une remorque
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q716.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°717',
    'libelle'=> "La longueur d‟un véhicule articulé peut atteindre
    a) 22m
    b) 26m
    c) 18m
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q717.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°718',
    'libelle'=> "La longueur maximale d‟un train double est de :
    a) 18m
    b) 22m
    c) 25m
    d) 16m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q718.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°719',
    'libelle'=> "Quelle est la durée minimale obligatoire de repos pour un conducteur de véhicule de plus de 3,5T
    de PTAC après 4heures30mn de route ?
    a) 1h
    b) 45mn
    c) 55mn
    d) 1h30mn
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q719.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°720',
    'libelle'=> "En rase campagne, quel intervalle minimal de sécurité doit respecter deux véhicules de plus 3,5T
    de PTAC et de plus de 7m de long qui se suivent lorsqu‟ils roulent à la même vitesse ?
    a) 40m environ
    b) 50m environ
    c) 60m environ
    d) 80m environ
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q720.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°721',
    'libelle'=> "Dans une descente dangereuse :
    a) Je ralentis
    b) J‟utilise le ralentisseur
    c) Je rétrograde
    d) J‟utilise le frein à main
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q721.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°722',
    'libelle'=> "A la rencontre de panneau B2a1, il est interdit :
    a) à tout véhicule de transport de marchandises de tourner à
    gauche
    b) aux véhicules de transport de marchandises dont le PTAC
    est inférieur à 3,5T de tourner à gauche
    c) aux véhicules de transport de marchandises dont le PTAC est
    supérieur à 3,5T de tourner à gauche
    d) à tout véhicule de transport de tourner à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q722.mp3',
    'extension' => 'mp3',
    'img' => '722.png',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°723',
    'libelle'=> "A la vue du panneau B3-3 il est interdit :
    a) à un véhicule de transport de marchandise de dépasser un petit
    véhicule
    b) aux véhicules de transport de marchandises dont le PTAC excède
    3,5T de dépasser tout véhicule à moteur à l‟exception des véhicules à deux
    roues sans side-car
    c) aux véhicules de transport de marchandises dont le PTAC est
    inférieur à 3,5T de dépasser tout petit véhicule
    d) à un véhicule poids lourd de dépasser une voiture
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename' => 'q723.mp3',
    'extension' => 'mp3',
    'img' => '723.png',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°724',
    'libelle'=> "Que signifie le panneau B8-1 :
    a) voie réservée aux véhicules de transport de marchandises dont le
    PTAC est inférieur ou égal à 5,5T
    b) accès interdit aux véhicules poids lourds dont le PTAC est égal à
    5,5T
    c) accès interdit aux véhicules de transport de marchandises dont le
    PTAC excède 5 ,5T
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q724.mp3',
    'extension' => 'mp3',
    'img' => '724.png',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°725',
    'libelle'=> "Que signifie le panneau B13a,
    a) Accès interdit aux véhicules pesant 2,5T
    b) Accès interdit aux véhicules pesant sur un essieu plus de 2,5T
    c) Accès interdit aux véhicules pesant plus de 2,5T
    d) Accès interdit aux véhicules pesant sur un essieu 2,5T
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q725.mp3',
    'extension' => 'mp3',
    'img' => '725.png',
    'sujet_id' => 2,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°726',
    'libelle'=> "Le panneau B29-1 :
    a) m'indique une signalisation de position à 500m
    b) concerne tous les véhicules à moteur roulant à plus de 60km/h
    c) m'indique une voie réservée aux véhicules lents à 500m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q726.mp3',
    'extension' => 'mp3',
    'img' => '726.png',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°727',
    'libelle'=> "Que m'indique le panneau B18b ?
    a) Accès interdit aux véhicules transportant plus d‟une certaine
    quantité de produits de nature à polluer l‟eau
    b) Accès interdit aux véhicules transportant plus d‟une certaine
    quantité de produits explosifs ou facilement inflammables.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q727.mp3',
    'extension' => 'mp3',
    'img' => '727.png',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°728',
    'libelle'=> "Effectuer un transport sous le régime « TIR » permet de simplifier le contrôle de :
    a) La police sur la route
    b) La douane aux frontières
    c) La douane sur la route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q728.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°729',
    'libelle'=> "Vous effectuez un transport sous convention TIR :
    a) Toutes les portes à l‟exception de celles de la cabine doivent être scellées
    b) Le véhicule peut circuler sans bâche sans élingues
    c) Les portes de la cabine doivent être scellées
    d) Les élingues d‟attache de la bâche doivent être scellées
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename' => 'q729.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°730',
    'libelle'=> "La mention TIR peut être inscrite sur le véhicule pour un transport :
    a) local
    b) international
    c) inter urbain
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q730.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°731',
    'libelle'=> "Le poids total autorisé en charge (P. T. A C) est inscrit sur :
    a) la carte grise
    b) la plaque de tare
    c) la vignette fiscale
    d) la quittance de la douane
    e) la plaque du constructeur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abe',
    'filename' => 'q731.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°732',
    'libelle'=> "On appelle transports « exceptionnels » ceux dont les dimensions ou le poids du chargement
    dépassent les limites fixées par :
    a) La Préfecture
    b) La Direction Générale des transports terrestres
    c) Le code de la route
    d) Le ministère des transports
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q732.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°733',
    'libelle'=> "Quels sont les renseignements qu‟on peut retrouver sur la plaque de tare ou de surface ?
    a) Le poids à vide
    b) Le poids total autorisé en charge
    c) Le poids total roulant autorisé
    d) La surface
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename' => 'q733.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°734',
    'libelle'=> "Pour tourner à droite sur une chaussée à sens unique je dois :
    a) Serrer ma droite
    b) Serrer ma gauche
    c) Me déporter au milieu de la chaussée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q734.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°735',
    'libelle'=> "Pour tourner à droite, je dois :
    a) Accélérer
    b) Mettre le clignotant à droite
    c) Ralentir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q735.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°736',
    'libelle'=> "Pour tourner à droite sur une chaussée à double sens, je dois :
    a) Serrer ma droite
    b) Me déporter au milieu
    c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q736.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°737',
    'libelle'=> "Pour tourner à gauche sur une chaussée à double sens, je dois :
    a) Mettre le clignotant à gauche, céder le passage à droite
    b) Ralentir et serrer la gauche
    c) Tourner sans respecter la priorité à droite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q737.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°738',
    'libelle'=> "Pour tourner à gauche sur une chaussée à sens unique, je dois :
    a) Serrer ma droite et mettre le clignotant à gauche
    b) Respecter les règles de priorité
    c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q738.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>8,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



/// chapitre 9 pour 10 PERMIS DE CONDUIRE CATEGORIE D
[
    'titre' => 'Question n°739',
    'libelle'=> "Pour tourner à gauche sur une chaussée à double sens, je dois :
    a) Mettre le clignotant à gauche et appliquer la priorité à droite
    b) Accélérer, mettre le clignotant à droite
    c) Ralentir et tourner à gauche seulement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q739.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°740',
    'libelle'=> "Pour tourner à gauche sur une chaussée à sens unique, je dois :
    a) Serrer ma droite et mettre le clignotant à gauche
    b) Respecter les règles de priorité
    c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q740.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°741',
    'libelle'=> "L‟autocar est un véhicule de transport en commun de personnes destiné au :
    a) Transport de passagers assis uniquement
    b) Transport de marchandises sur une longue distance
    c) Transport urbain
    d) Transport de passagers debout
    e) Transport de passagers assis sur une longue distance
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ae',
    'filename' => 'q741.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°742',
    'libelle'=> "
    L‟autobus est un véhicule de transport en commun de personnes destiné au :
a) Transport de passagers assis uniquement
b) Transport sur une longue distance
c) Transport urbain
d) Transport de passagers debout ou assis
e) Transport de passagers assis sur une longue distance
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'cb',
    'filename' => 'q742.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°743',
    'libelle'=> "Les feux de gabarit sont obligatoires sur les véhicules de largeur égale à :
    a) 2,10m
    b) 2,15m
    c) 2,20m
    d) 1,80m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q743.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°744',
    'libelle'=> "Les feux d‟encombrement :
    a) Sont toujours de couleur jaune
    b) Sont de couleur blanche à l‟avant
    c) Eclairent à 40m
    d) Sont de couleur rouge à l‟arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename' => 'q744.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°745',
    'libelle'=> "Quels sont les accessoires que le conducteur doit faire connaitre aux passagers avant de prendre la
    route ?
    a) Le livre de bord et la carte gris
    b) L‟extincteur et la boîte de premiers secours
    c) La manivelle et la roue-secours
    d) Les triangles de pré signalisation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q745.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°746',
    'libelle'=> "Quel est l‟âge minimum du candidat à l‟examen du permis de conduire catégorie D ?
    a) 18ans
    b) 20ans
    c) 21ans
    d) 25ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q746.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°747',
    'libelle'=> "Un conducteur de véhicule de transport en commun doit disposer d‟une boîte de premiers
    secours :
    a) Sous son siège
    b) Cadenassée sous son siège
    c) Dans le coffre à bagages
    d) Cadenassé dans le porte-bagages intérieur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q747.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°748',
    'libelle'=> "Que faire en cas d‟accident d‟un véhicule de transport en commun ?
    a) Arrêter le moteur
    b) Faire évacuer les passagers
    c) Eviter la panique
    d) Attendre la gendarmerie avant d‟évacuer les blessés
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q748.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°749',
    'libelle'=> "Que faire en cas de panne d‟un véhicule de transport en commun ?
    a) Fermer le robinet de carburant
    b) Couper le circuit électrique
    c) Placer les triangles de pré signalisation
    d) Alerter la gendarmerie",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q749.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°750',
    'libelle'=> "Que faire en cas d‟incendie d‟un véhicule de transport en commun ?
    a) Rassurer les passagers pour éviter la panique
    b) Chercher de l‟eau pour éteindre l‟incendie
    c) Couper le circuit électrique
    d) Mettre les feux de détresse
    e) Briser les issues de secours en utilisant le marteau pic
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'ace',
    'filename' => 'q750.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°751',
    'libelle'=> "Une boîte de premiers secours est :
    a) Obligatoire dans les véhicules de transport en commun de personnes
    b) Conseillée par les véhicules de transport en commun de personnes uniquement
    c) Obligatoire dans le cas de transport des enfants uniquement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q751.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°752',
    'libelle'=> "Le transport de voyageurs dans les remorques attelées à des véhicules de transport en commun
    est :
    a) autorisé
    b) toléré
    c) interdit
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q752.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°753',
    'libelle'=> "En rase campagne, quelle est la vitesse maximale autorisée pour un véhicule de transport en
    commun pesant entre 10 et 15 tonnes ?
    a) 70km/h
    b) 90km/h
    c) 50km/h
    d) 60km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q753.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°754',
    'libelle'=> "En rase campagne, quelle est la vitesse maximale autorisée pour un véhicule de transport en
    commun pesant entre 15 et19 tonne ?
    a) 60km/h
    b) 70km/h
    c) 75km/h
    d) 90km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q754.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°755',
    'libelle'=> "En rase campagne, quelle est la vitesse maximale autorisée pour un véhicule de transport en
    commun pesant entre 19 et 26 tonnes ?
    a) 65km/h
    b) 60km/h
    c) 75km/h
    d) 85km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q755.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°756',
    'libelle'=> "En rase campagne, quelle est la vitesse maximale autorisée pour un véhicule de transport en
    commun dont le poids est supérieur à 26 tonnes ?
    a) 85km/h
    b) 75km/h
    c) 65km/h
    d) 60km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q756.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°757',
    'libelle'=> "Quelle est la durée maximale de conduite continue ?
    a) 2h
    b) 6h
    c) 4h30mn
    d) 5h30mn
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q757.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°758  ',
    'libelle'=> "Quelle est la durée maximale de conduite journalière ?
    a) 11h
    b) 9h
    c) 12h30mn
    d) 13h25mn
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q758.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°759',
    'libelle'=> "Les véhicules dont le PTAC dépasse 3,5T doivent être munis d‟un appareil de contrôle appelé :
    a) Ethylotest
    b) Totaliseur
    c) Chrono tachygraphe
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q759.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°760',
    'libelle'=> "Le chrono tachygraphe permet l'enregistrement :
a) Des tours des roues avant
b) De la vitesse du véhicule et de la distance parcourue
c) Du temps de conduite et de repos
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q760.mp3',
    'extension' => 'mp3',
    'img' => '760.png',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°761',
    'libelle'=> "L'intervalle de sécurité entre deux véhicules de plus de 3,5T et de plus de 7 mètres de long qui se
    suivent permet :
    a) D‟éviter le une collision en cas de freinage brusque
    b) De faciliter le dépassement par les véhicules légers
    c) De mieux contrôler les organes de conduite
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q761.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°762',
    'libelle'=> "Sur les chaussées comportant trois (3) voies affectées à un même sens de circulation, les véhicules
    de plus de 3,5T et les véhicules de plus de 7 mètres de long doivent normalement emprunter :
    a) Toutes les voies
    b) La voie de droite
    c) Les deux voies les plus à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q762.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°763',
    'libelle'=> "L‟utilisation d‟un véhicule de transport de marchandises pour assurer le transport en commun de
    personnes est :
    a) Autorisée
    b) Interdite
    c) Facultative
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q763.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°764',
    'libelle'=> "L'utilisation d‟un véhicule de transport de marchandises pour assurer le transport en commun de
personnes est :
a) interdite
b) facultative
c) autorisée après homologation des aménagements
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q764.mp3',
    'extension' => 'mp3',
    'img' => ' ',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°765',
    'libelle'=> "Que signifie le panneau B34a ?
    a) Dépassement interdit aux camions
    b) Fin d'interdiction de dépasser aux véhicules de transport de
    marchandises de plus de 3,5T
    c) Interdiction de dépasser tout véhicule
    d) Fin d'interdiction de dépasser
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q765.mp3',
    'extension' => 'mp3',
    'img' => '765.png',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°766',
    'libelle'=> "Que signifie le panneau B45 ?
a) Accès interdit aux véhicules de transport en commun de personnes
b) Stationnement interdit aux véhicules de transport en commun de
personnes
c) Fin de voies réservées aux véhicules de transport en commun de
personnes
d) Arrêt interdit aux véhicules de transport en commun de personnes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q766.mp3',
    'extension' => 'mp3',
    'img' => '766.png',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°767',
    'libelle'=> "Que signifie le panneau B27 ?
a) Arrêt d'autobus
b) Parking réservé aux autobus
c) Voie réservée aux autobus
d) Arrêt obligatoire aux autobus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q767.mp3',
    'extension' => 'mp3',
    'img' => '767.png',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°768',
    'libelle'=> "Un chargement dépassant de plus d'un mètre à l'arrière doit être signalé par :
a) Un dispositif réfléchissant rouge
b) Un feu rouge visible à 150m en cas de visibilité insuffisante
c) Un chiffon flottant
d) Une lanterne rouge
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename' => 'q768.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°769',
    'libelle'=> "Que signifie le panneau B10a ?
a) Accès interdit aux véhicules ou ensemble de véhicules dont la
longueur dépasse 10m
b) Accès interdit uniquement aux véhicules de transport de
marchandises dont la longueur dépasse 10m
c) Accès interdit uniquement aux véhicules de transport en commun
de personnes dont la longueur dépasse 10m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q769.mp3',
    'extension' => 'mp3',
    'img' => '769.png',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°770',
    'libelle'=> "Quelle est la vitesse maximale autorisée sur route pour automobile ?
    a) 90km/h
    b) 60km/h
    c) 130km/h
    d) 110km/h ou selon la législation en vigueur dans chaque pays
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q770.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°771',
    'libelle'=> "Quelle est la vitesse maximale autorisée en agglomération ?
    a) 70km/h
    b) 50km/h
    c) 90km/h
    d) 100km/h
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q771.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°772',
    'libelle'=> "Avec quelle catégorie de permis de conduire pouvez-vous conduire un taxi ?
    a) C
    b) C1
    c) DR (TCR)
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q772.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°773',
    'libelle'=> "Quel est l'âge minimum du candidat au permis de conduire catégorie D ?
    a) 17ans
    b) 18ans
    c) 21ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q773.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°774',
    'libelle'=> "Quel intervalle minimal deux véhicules poids lourds long de plus de 7m doivent respecter entre
    eux lorsqu'ils roulent à la même vitesse ?
    a) 20m
    b) 30m
    c) 50m
    d) Rien de tout cela
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q774.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°775',
    'libelle'=> "Avant d'aborder une descente rapide avec mon véhicule poids lourd, je dois :
a) Mettre le véhicule au point mort et freiner
b) Rétrograder et utiliser au maximum le frein moteur
c) Rester à la même vitesse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q775.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°776',
    'libelle'=> "Avec les véhicules poids lourds ayant pour une hauteur de 4ou 5m du sol, chargement compris, je
    dois :
    a) Circuler sans aucune précaution
    b) Circuler en jetant des coups d‟œil sur les installations et passer
    c) M'assurer que je peux passer sans causer des dommages aux ouvrages d‟art et aux
    installations aériennes, situés au-dessus des voies publiques
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q776.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°777',
    'libelle'=> "Quelle longueur maximale peut atteindre le porte-à-faux arrière d‟un véhicule poids lourd ou de
    transport en commun ?
    a) 3,5m
    b) 5m
    c) 2m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q777.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°778',
    'libelle'=> "Un véhicule de transport de marchandises peut être utilisé pour le transport en commun de
personne si le conducteur est titulaire du permis :
a) Catégorie D
b) Catégorie C
c) Catégorie C1
d) Aucun permis ne l‟autorise
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q778.mp3',
    'extension' => 'mp3',
    'img' => '778',
    'sujet_id' => 2,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°779',
    'libelle'=> "A quoi sert le ralentisseur sur un véhicule poids lourd ?
a) Permet de descendre à une allure réduite dans une longue et forte descente
b) Permet de freiner
c) Permet de s‟arrêter
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q779.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°780',
    'libelle'=> "De combien de mètres mon chargement de grande longueur peut-il dépasser l‟extrémité avant du
    véhicule ?
    a) 1m
    b) 0m
    c) 0,5m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q780.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°781',
    'libelle'=> "De combien de mètres au maximum votre chargement de grande longueur peut-il dépasser
    l‟extrémité arrière du véhicule ?
    a) 3m
    b) 5m
    c) 3,5m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q781.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°782',
    'libelle'=> "Quelle charge maximale autorisée peut supporter un essieu isolé ?
    a) 13tonnes
    b) 13,5tonnes
    c) 15tonnes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q782.mp3',
    'extension' => 'mp3',
    'img' => '7',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°783',
    'libelle'=> "Dans la définition du poids à vide d‟un véhicule on tient compte :
a) du poids du véhicule, avec le réservoir rempli uniquement
b) du poids du véhicule sans le carburant, sans bâche
c) du poids du véhicule, les réservoirs remplis avec les équipements de bord
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q783.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°784',
    'libelle'=> "La ceinture de sécurité doit être portée par :
    a) le conducteur
    b) les passagers d‟un autocar
    c) les passagers d‟un autobus
    d) les enfants à bord d‟un véhicule de transport d‟enfants
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename' => 'q784.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°785',
    'libelle'=> "Le coupe-batterie permet d‟isoler :
a) les feux de détresse
b) les feux du véhicule
c) l‟alimentation électrique du moteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q785.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°786',
    'libelle'=> "Quelle est la profondeur minimale des rainures principales d‟un pneumatique de poids lourd ?
    a) 1mm
    b) 1,5mm
    c) 0,5mm
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q786.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°787',
    'libelle'=> "A l'intérieur d‟un autocar, je peux transporter :
a) des sacs de maïs
b) des colis contenant des liquides inflammables
c) des colis contenant des couteaux et objets pointus
d) mon sac à main
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q787.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°788',
    'libelle'=> "Pour le transport des bagages dans un véhicule de transport en commun, j‟utilise :
a) la soute pour tous les bagages
b) la remorque pour le transport des combustibles inflammables
c) le porte-bagage de l'intérieur pour les colis légers
d) le porte-bagage du dessus du toit pour les bagages légers
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename' => 'q788.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°789',
    'libelle'=> "J'utilise les feux de détresse d‟un véhicule de transport en commun d‟enfants :
a) lors de la montée et de la descente des enfants
b) lors de l'arrêt du véhicule
c) pour le transport d‟enfants en excursion
d) pour signaler la présence à bord des enfants en fête
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q789.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°790',
    'libelle'=> "A partir de 55ans, quelle est la périodicité des visites médicales pour un conducteur de transport en
    commun :
    a) 1an
    b) 2ans
    c) 5ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q790.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°791',
    'libelle'=> "Quelle est la périodicité des visites médicales pour un conducteur de transport en commun dont
    l'âge est compris entre 35ans et55ans ?
    a) 1an
    b) 2ans
    c) 3ans
    d) 5ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q791.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°792',
    'libelle'=> "Quelle est la période des visites médicales pour un conducteur de transport en commun de moins
    de 35ans :
    a) 1an
    b) 2ans
    c) 3ans
    d) 5ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q792.mp3',
    'extension' => 'mp3',
    'img' => '792',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°793',
    'libelle'=> "Pour le calcul du nombre de personnes transportées, un enfant compte pour une demi-personne s‟il
    est âgé de :
    a) Moins de 10ans
    b) Moins de12ans
    c) Moins de14ans
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q793.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°794',
    'libelle'=> "Sur une pente, quel est le véhicule qui doit s‟arrêter à temps à cause d‟un croisement difficile ?
    a) Le véhicule montant
    b) Le véhicule descendant
    c) Le véhicule qui le désire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q794.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°795',
    'libelle'=> "En agglomération quel est le véhicule qui doit s‟arrêter à temps à cause d‟un croisement difficile ?
    a) L4autobus
    b) Le camion
    c) Le véhicule qui le désire
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q795.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°796',
    'libelle'=> "Sur une pente, quel est le véhicule qui doit faire marche arrière à cause d‟un croisement difficile ?
    a) L'autobus
    b) Le véhicule qui le désire
    c) Le camion
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q796.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°797',
    'libelle'=> "
    Pour tourner à droite sur une route à double sens, je dois :
a) Serrer ma droite
b) Serrer ma gauche
c) Me déporter au milieu
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q797.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°798',
    'libelle'=> "Pour tourner à droite, je dois :
a) Accélérer
b) Mettre le clignotant à droite
c) Ralentir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q798.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°799',
    'libelle'=> "Pour tourner à gauche sur une chaussée à double sens, je dois :
a) Serrer ma droite
b) Me déporter au milieu
c) Serrer ma gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q799.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>9,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



/// chapitre 10 EQUIPEMENT
[
    'titre' => 'Question n°800',
    'libelle'=> "Lequel des quatre temps ci-après correspond au temps utile ou au temps moteur ?
    a) Echappement
    b) Admission
    c) Explosion
    d) Compression
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q800.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°801',
    'libelle'=> "Donnez la position des soupapes à l'explosion :
    a) Les soupapes s'ouvrent
    b) Les deux soupapes sont fermées
    c) Les soupapes d‟admission et d‟échappement sont ouvertes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q801.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°802',
    'libelle'=> "Donnez la position du piston à l‟explosion :
    a) Le piston monte
    b) Le piston descend
    c) Le piston est sur place
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q802.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°803',
    'libelle'=> "Quel est le rôle du carburateur ?
    a) Le carburateur fournit du carburant
    b) Le carburateur fait tourner le moteur
    c) Le carburateur produit un mélange gazeux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q803.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°805',
    'libelle'=> "Quel est le rôle de la batterie ?
    a) La batterie génère le courant
    b) La batterie fournit du courant à l‟alternateur
    c) La batterie accumule le courant
    d) La batterie fournit l‟énergie nécessaire au démarrage du moteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cd',
    'filename' => 'q804.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°805',
    'libelle'=> "Quel est le rôle du radiateur ?
    a) Le radiateur conserve la chaleur du moteur
    b) Le radiateur aère le moteur
    c) Le radiateur contribue au refroidissement du moteur
    d) Le radiateur fait tourner le ventilateur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q805.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°806',
    'libelle'=> "Entre quels organes du moteur se situe la pompe à essence ?
    a) Le radiateur et la pompe à eau
    b) Le réservoir et le carburateur
    c) Le filtre à air et le carburateur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q806.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°807',
    'libelle'=> "Quel est le rôle de la bobine
    a) la bobine transforme le courant primaire de la batterie en courant secondaire
    b) La bobine réduit l‟intensité électrique
    c) La bobine régularise le courant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q807.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°808',
    'libelle'=> "Quel est le rôle de l‟allumeur ?
    a) L'allumeur distribue du courant aux bougies
    b) L'allumeur fournit du courant au démarreur
    c) L'allumeur absorbe l‟étincelle des bougies
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q808.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°809',
    'libelle'=> "Quel est le circuit d'allumage d‟un moteur à essence ?
    a) Batterie – bobine – allumeur – bougies
    b) Démarreur – allumeur – batterie
    c) Allumeur – bobine – vis platinée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q809.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°810',
    'libelle'=> "De quels éléments le moteur tire-t-il sa force ?
    a) Essence – air – courant électrique
    b) Air – essence
    c) Courant électrique – eau – essence
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q810.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°811',
    'libelle'=> "Quels dégâts peut provoquer l'échauffement excessif du moteur
    a) Joint de culasse brûlé
    b) Décalage du moteur
    c) Culasse bombée
    d) Batterie déchargée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q811.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°812',
    'libelle'=> "Citer les feux obligatoires à l'arrière d'un véhicule de tourisme :
a) Deux feux de route – deux feux de croisement – deux feux indicateurs de changement de
direction – deux feux de position - -deux feux stop
b) Deux feux de position – deux clignotants – deux feux stop – deux cataphotes – feux
plaques d‟immatriculation
c) Deux feux de position – deux clignotants – feu plaque d'immatriculation – deux feux stop
– deux cataphotes – deux feux antibrouillard – deux feux de recule
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q812.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°813',
    'libelle'=> "Il est dangereux d‟utiliser des pneumatiques usés parce qu‟ils assurent :
    a) une bonne adhérence
    b) une mauvaise adhérence
    c) une conduite aisée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q813.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°814',
    'libelle'=> "Le véhicule de tourisme possède combien de sortes de freins ?
    a) Quatre sortes
    b) Deux sortes
    c) Trois sortes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q814.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°815',
    'libelle'=> "Le lit nacelle est un dispositif qui permet de transporter dans le véhicule les enfants de :
    a) 1 à 6 mois uniquement
    b) 0 à9 mois
    c) 2 à 10mois
    d) 3 à 20mois
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q815.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°816',
    'libelle'=> "Le siège homologué (baquet, harnais, réceptacle) sert à transporter dans le véhicule les enfants de :
    a) 3 à 4 mois
    b) 4 à 5mois
    c) 6 à 8 mois
    d) 9 mois à 4 ans
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q816.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°817',
    'libelle'=> "Quels dégâts peut provoquer le manque d‟huile à moteur ?
    a) Bielles coulées
    b) Moteur bloqué
    c) Moteur tournant en sous-régime
    d) Eclatement du disque d‟embrayage
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q817.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°818',
    'libelle'=> "Quelle anomalie occasionne l'éclatement d'une durit à eau ?
    a) Le refroidissement du moteur
    b) L'emballement du moteur
    c) L'échauffement du moteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q818.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°819',
    'libelle'=> "A quel ennui vous expose la rupture de la courroie d‟alternateur ?
    a) Le circuit de charge interrompue
    b) La charge excessive
    c) La charge suffisante
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q819.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°820',
    'libelle'=> "Combien de pompes permettent le bon fonctionnement d‟un moteur à essence ?
    a) 2 pompes
    b) 3 pompes
    c) 4 pompes
    d) 5 pompes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q820.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 1,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°821',
    'libelle'=> "Quelles sont les pompes qui contribuent au bon fonctionnement d‟un moteur à essence ?
    a) Pompe à essence
    b) Pompe à huile
    c) Pompe à air
    d) Pompe à eau
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename' => 'q821.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°822',
    'libelle'=> "Avec mon feu d‟éclairage, la plaque minéralogique doit être lisible à une distance de :
    a) 50m
    b) 20m
    c) 30m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q822.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°823',
    'libelle'=> "Par temps de brouillard, tout conducteur de véhicule circulant sur une route doit obligatoirement
    allumer :
    a) Les feux de position
    b) Les feux de route
    c) Les feux de croisement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q823.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°824',
    'libelle'=> "Par temps de forte pluie, tout conducteur de véhicule circulant sur une route, doit obligatoire
    allumer :
    a) Les feux de position
    b) Les feux de route
    c) Les feux de croisement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q824.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°825',
    'libelle'=> "Quand vérifie-t-on le niveau d'huile dans le moteur ?
    a) Toutes les semaines
    b) Tous les mois
    c) Tous les milles kilomètres
    d) Tous les jours
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q825.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°826',
    'libelle'=> "Quand vérifie-t-on le niveau d'huile dans le moteur ?
    a) Toutes les semaines
    b) Tous les mois
    c) Tous les milles kilomètres
    d) Tous les jours
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q826.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°827',
    'libelle'=> "Pour compléter le liquide de la batterie, j‟utilise
    a) L‟eau de pluie
    b) L‟eau de mer
    c) L‟eau distillée
    d) L'eau du robinet
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q827.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°828',
    'libelle'=> "Sur un véhicule ou trouve-t-on l‟instrument qui indique la température de l‟eau
a) Dans le moteur
b) Sur le radiateur
c) Au tableau de bord
d) Sur le filtre à air
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q828.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°829',
    'libelle'=> "Sur un véhicule ou trouve-t on l‟instrument qui indique la pression de l‟huile à moteur
    a) Dans le moteur
    b) Sur le tableau de bord
    c) Sur le carter
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q829.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°830',
    'libelle'=> "Le moteur de votre véhicule roulant normalement s'éteint, de quoi peut provenir la panne ?
a) De l'insuffisance d‟huile à moteur
b) De l'insuffisance d‟eau dans le radiateur
c) De la faiblesse de la batterie
d) Du manque de carburant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q830.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°831',
    'libelle'=> "La batterie montée sur le véhicule après une charge correcte ne démarre pas le moteur. Quelle peut
être la cause ?
a) le manque d‟eau sur la batterie
b) les cosses mal serrées sur les bornes
c) le manque de carburant
d) la défectuosité de l‟alternateur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q831.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°832',
    'libelle'=> "L‟eau du radiateur bouillonne, que doit-on faire ?
    a) Arrêter le moteur et mettre de l‟eau dans le radiateur
    b) Poursuivre sa route
    c) Arrêter le moteur, le laisser se refroidir, mettre de l‟eau et consulter après un garagiste
    d) Arrêter le véhicule, ouvrir le radiateur pour laisser dégager la chaleur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q832.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°833',
    'libelle'=> "Quelles sont les pièces administratives obligatoires d‟un véhicule automobile ?
    a) – La carte grise
    - le certificat d‟assurance
    - la vignette de l‟année en cours
    - la visite technique
    b) – le permis de conduire
    - l‟attestation de réglage phares
    - le papier d‟achat
    - la quittance de la douane
    c) –la visite technique
    - le permis de conduire
    - la quittance de la douane
    - l‟attestation de réglage phares
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q833.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°834',
    'libelle'=> "Un véhicule de tourisme possède combien de roues ?
    a) quatre
    b) cinq
    c) six
    d) sept
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q834.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°835',
    'libelle'=> "Une automobile est autorisée à circuler :
    a) Sans plaque d'immatriculation, avec assurance
    b) Avec la plaque d‟immatriculation portant le numéro du châssis
    c) Avec la plaque d‟immatriculation homologuée par le service chargé des transports
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q835.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°836',
    'libelle'=> "Quand utilise-t-on l‟essuie glace ?
a) Par temps de pluie
b) Quand le pare brise est sale
c) Quand il fait sombre
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q836.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n837',
    'libelle'=> "Les feux de route servent à éclairer jusqu'à :
    a) 100m environ
    b) 30m environ
    c) 150m et au delà
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q837.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°838',
    'libelle'=> "Quels feux utilisez-vous la nuit, quand vous êtes derrière un autre usager à faible distance sur une
    route mal éclairée ?
a) Les feux de route
b) Les feux de croisement
c) Les feux de position
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => '838.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°839',
    'libelle'=> "Quels feux utilisez-vous en stationnement en bordure d‟une route mal éclairée ?
a) les feux de détresse
b) les feux de croisement
c) les feux de position
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q839.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°840',
    'libelle'=> "J‟utilise mes feux de détresse pour :
    a) indiquer que je vais tout droit
    b) faire marche arrière
    c) indiquer que je suis en panne
    d) indiquer que je suis le dernier d‟un convoi
    e) indiquer que je suis pressé
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'b',
    'filename' => 'q840.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°841',
    'libelle'=> "Sans feux arrière la nuit :
    a) Je peux circuler sur une chaussée à double sens
    b) Je peux circuler sur une chaussée à sens unique
    c) Je ne peux pas circuler
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q841.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 2,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°842',
    'libelle'=> "A quoi sert le triangle de pré-signalisation ?
    a) A signaler la position d'un véhicule en panne sur la chaussée
    b) A signaler la présence d'un véhicule en stationnement
    c) A signaler un arrêt
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q842.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°843',
    'libelle'=> "A quoi sert l'extincteur ?
    a) A éteindre un début d‟incendie sur un véhicule
    b) A secourir un blessé
    c) A refroidir le moteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => '843.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°844',
    'libelle'=> "La roue secours :
    a) Est obligatoire pour tout déplacement
    b) N'est pas obligatoire lorsqu‟on circule en ville
    c) Est obligatoire seulement pour les longs voyages
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q844.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°845',
    'libelle'=> "Que faut-il faire pour éviter de polluer l‟environnement par le gaz d‟échappement de votre
    moteur ?
    a) Bien régler le moteur de mon véhicule
    b) Utiliser un carburant de bonne qualité
    c) Rouler à vive allure
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q845.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°846',
    'libelle'=> "Pour vidanger le moteur d‟un véhicule bien entretenu, il faut tenir compte :
    a) Du kilométrage parcouru
    b) De la vitesse élevée
    c) Du nombre de voyages effectués
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q846.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°847',
    'libelle'=> "La vérification de l‟huile à frein se fait :
    a) Tous les jours
    b) Tous les mois
    c) Au bon vouloir du conducteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q847.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°848',
    'libelle'=> "Qu‟est-ce qui peut causer l'incendie sur un véhicule automobile ?
    a) La chaleur ambiante
    b) Un court-circuit
    c) Des gouttes d'eau dans le moteur en marche
    d) Fuite d‟essence
    e) Les flammes de la tuyauterie d‟échappement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'bde',
    'filename' => 'q848.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°849',
    'libelle'=> "Quelles sont les causes d‟usure prématurée des pneumatiques ?
    a) La surcharge et le défaut de gonflage
    b) Le démarrage violent et les coups de trottoir
    c) L‟utilisation des pneumatiques sur chaussées mouillées
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q849.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°850',
    'libelle'=> "Le rétroviseur extérieur côté droit est obligatoire sur :
    a) tous véhicules
    b) les véhicules de transport de marchandises
    c) les véhicules de transport en commun de personnes
    d) les machines agricoles
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q850.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°851',
    'libelle'=> "Les dispositifs réfléchissants placés à l‟arrière du véhicule sont :
    a) facultatifs
    b) obligatoires
    c) de couleur rouge
    d) visibles la nuit par temps clair à une distance de 100m quand ils sont éclairés par les
    feux de route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bcd',
    'filename' => 'q851.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°852',
    'libelle'=> "Un chargement dépassant de plus d‟un mètre à l‟arrière d‟un véhicule doit être signalé par :
    a) Un dispositif réfléchissant rouge
    b) Un feu rouge visible à 150m en cas de visibilité insuffisante
    c) Un chiffon flottant
    d) Une lanterne rouge
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename' => 'q852.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°853',
    'libelle'=> "A quelle distance les feux de route éclairent t-ils, par temps normal ?
    a) 50m environ
    b) 100m environ
    c) 150m environ
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q853.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°854',
    'libelle'=> "Quels feux utilisez-vous lorsque votre véhicule suit un autre usager à faible distance ?
    a) Feux de route
    b) Feux de croisement
    c) Feux de détresse
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q854.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°855',
    'libelle'=> "Le moteur au régime élevé fait des à coups, à quoi cela peut-il être dû ?
    a) La batterie mal chargée
    b) Les bougies défectueuses
    c) L‟allumeur déréglé
    d) La vis platinée déréglée
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bcd',
    'filename' => 'q855.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°856',
    'libelle'=> "Un véhicule automobile est équipé de combien de rétroviseurs obligatoires ?
    a) Un
    b) Deux
    c) Trois
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q856.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°857',
    'libelle'=> "Que faut-il en cas de crevaison ?
    a) Un cric
    b) Une roue secours
    c) Un extincteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q857.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°858',
    'libelle'=> "A quoi sert la ceinture de sécurité ?
a) Pour régler le siège
b) Permet de maintenir les bagages en sécurité
c) Maintient efficacement le conducteur et les passagers sur leur siège en cas d‟accident, de
collision ou de freinage brusque
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q858.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°859',
    'libelle'=> "Quel est le circuit d‟alimentation en carburant d‟un moteur à essence ?
a) Réservoir – pompe à essence – carburateur
b) Réservoir – carburateur – pompe à essence
c) Pompe à essence – réservoir – carburateur
d) Réservoir – Pompe à essence – pompe à injection - injecteurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ad',
    'filename' => 'q859.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°860',
    'libelle'=> "En cas de début d'incendie sur véhicule :
    a) je jette de l'eau sur les flammes
    b) je jette du sable ou de la terre à la base des flammes
    c) j'utilise une couverture pour étouffer le feu
    d) j'utilise l'extincteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename' => 'q860.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°861',
    'libelle'=> "Sur mon véhicule, en roulant je peux contrôler visuellement :
    a) certains niveaux
    b) l'état des pneumatiques
    c) l'état des courroies
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q861.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 3,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°862',
    'libelle'=> "En cas de crevaison, pour changer la roue :
    a) je cale le véhicule et sors la roue secours, la clé de roue et le cric,
    b) je desserre les écrous
    c) je débloque et libère la roue crevée,
    d) je mets la roue secours et resserrer les écroues,
    e) je soulève le véhicule du coté de la crevaison.
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abcde',
    'filename' => 'q862.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°863',
    'libelle'=> "Quelle pièce officielle permet d‟identifier le propriétaire d‟un véhicule ?
    a) la police d‟assurance
    b) la carte grise
    c) l'attestation de réglage phare
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q863.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°864',
    'libelle'=> "Pour un véhicule léger de transport privé la visite technique doit s‟effectuer :
    a) tous les ans
    b) tous les six mois
    c) tous les trois mois
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q864.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°865',
    'libelle'=> "A quoi sert le contrat d'assurance au tiers ?
    a) A couvrir les dégâts causés lors d'un accident
    b) A couvrir les surcharges
    c) A couvrir les dégâts causés à autrui
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q865.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°866',
    'libelle'=> "Le contrat d'assurance est valable :
    a) sans la visite technique
    b) avec la visite technique
    c) avec la vignette
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q866.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°867',
    'libelle'=> "La vignette fiscale est une pièce obligatoire :
    a) pour tout véhicule
    b) pour les véhicules de transport en commun de personnes
    c) pour les véhicules de transport de marchandises
    d) pour les véhicules administratifs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bc',
    'filename' => 'q867.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°868',
    'libelle'=> "Lorsque les pneus sont neufs :
a) La tenue de route est améliorée
b) Le risque d‟aquaplaning est écarté
c) L'adhérence est bonne
d) Le risque de dérapage augmente
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q868.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°869',
    'libelle'=> "L'absence de bouchon sur la valve d‟une roue :
    a) est dangereuse
    b) peut diminuer l'étanchéité de la roue
    c) permet de libérer une surpression d‟air
    d) permet d‟augmenter l'air dans la roue
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q869.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°870',
    'libelle'=> "Il n'est pas obligatoire de mettre la ceinture de sécurité :
    a) Si le véhicule est équipé de coussin de gonflage
    b) Si la conduite s'effectue en agglomération
    c) Si la conduite s'effectue sur un long trajet
    d) Rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'd',
    'filename' => 'q870.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°871',
    'libelle'=> "La profondeur des rainures principales d‟un pneu doit être au minimum de :
    a) 0,6m
    b) 1,6m
    c) 1,5m
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q871.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°872',
    'libelle'=> "La portée minimale des feux dois être de :
    a) 30m pour les feux de croisement
    b) 45m pour les feux de croisement
    c) 100m pour les feux de route
    d) 150m pour les feux de route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q872.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],



[
    'titre' => 'Question n°873',
    'libelle'=> "Sur un même itinéraire et dans des conditions identiques, une voiture qui roule à 90km/h
    consomme à 130km/h :
    a) la même quantité d‟essence
    b) moins d'essence
    c) plus d'essence
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q873.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°874',
    'libelle'=>"La roue motrice est celle qui :
    a) a un moteur
    b) est relié au moteur et entraine le véhicule
    c) tire le moteur
    d) oriente le véhicule
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q874.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°875',
    'libelle'=> "Les roues motrices d'un véhicule peuvent être :
    a) à l‟avant
    b) à l‟arrière
    c) à l‟avant et à l‟arrière
    d) sur le porte-à-faux
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q875.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°876',
    'libelle'=> "Quand dit-on qu'un véhicule est à traction avant :
    a) si les roues motrices sont à l'avant
    b) si les roues motrices sont à l'arrière
    c) si le moteur est à l‟avant
    d) si le moteur est à l‟arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q876.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°877',
    'libelle'=> "quand dit-on qu'un véhicule est à propulsion arrière :
    a) si les roues motrices sont à l‟avant
    b) si les roues motrices sont à l‟arrière
    c) si le moteur est à l'avant
    d) si le moteur est à l'arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q877.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°878',
    'libelle'=> "Les roues directrices d‟une voiture sont placées :
    a) à l'avant
    b) à l'arrière
    c) à l'avant et à l‟arrière
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q878.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°879',
    'libelle'=> "Par temps de brouillard, je peux allumer les feux :
    a) de croisement
    b) de route
    c) de brouillard avant
    d) de brouillard arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename' => 'q879.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°880',
    'libelle'=> "Des amortisseurs usés :
    a) allongent la distance de freinage
    b) diminuent la distance de freinage
    c) compliquent la tenue de route
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q880.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°881',
    'libelle'=> "Dans une station service, l'extincteur est utilisable par :
    a) le technicien préposé
    b) le pompiste
    c) le gardien
    d) n'importe quel client
    e) tout usager capable de s'en servir
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'abce',
    'filename' => 'q881.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°882',
    'libelle'=> "Lors d'un contrôle routier, je dois présenter :
    a) Mon permis de conduite
    b) La carte grise
    c) Ma carte d‟identité
    d) Ma carte de groupe sanguin
    e) L‟assurance et la visite technique
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => 'e',
    'reponse' => 'e',
    'filename' => 'q882.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 4,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°883',
    'libelle'=> "La consommation du carburant augmente :
    a) si le chargement fait cabrer l‟avant du véhicule
    b) si je charge des bagages sur le toit
    c) si je tracte une caravane
    d) rien de tout ce qui précède
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q883.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°884',
    'libelle'=> "Quel effet un sous gonflage peut-il avoir sur la durée de vie de la carcasse du pneumatique ?
    a- usure plus rapide
    b- la carcasse se fatigue plus vite
    c- détérioration des composantes internes du pneu
    d- usure de la partie centrale
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q884.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°885',
    'libelle'=> "Pour un bon fonctionnement de mes pneus je dois régulièrement vérifier :
a- la pression à froid
b- la présence du bouchon de valve
c- les écrous de fixation des roues
d- le compteur kilométrique
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q885.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°886',
    'libelle'=> "Quelle incidence un sous gonflage peut avoir sur le comportement d‟un véhicule ?
    a- tenue de route réduite
    b- instabilité
    c- risque de renversement
    d- réduction de la consommation de carburant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q886.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°887',
    'libelle'=> "Pour diminuer les risques en cas de verglas, je peux équiper mon véhicule :
    a- de pneus spéciaux
    b- de pneus à crampons
    c- de chaînes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q887.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°888',
    'libelle'=> "Par temps de pluie, pour voir et être vu, j‟allume :
    a- mes feux de route
    b- mes feux de croisement
    c- mes feux de brouillard avant
    d- mon ou mes feux de brouillard arrière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bcd',
    'filename' => 'q888.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°889',
    'libelle'=> "Pour éviter la buée sur les vitres, je peux utiliser :
    a- la ventilation et le chauffage
    b- le dégivreur arrière
    c- les essuie-glaces
    d- le lave-glace
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q889.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°890',
    'libelle'=> "Les éléments qui permettent une meilleure visibilité sont :
    a- le lave-glace
    b- les essuie-glaces
    c- le pare-soleil
    d- les déflecteurs de vitres
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q890.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°891',
    'libelle'=> "Avant un voyage, je peux obtenir des renseignements sur la circulation par :
    a- le téléphone
    b- la radio
    c- la carte routière
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q891.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°892',
    'libelle'=> "Les véhicules prioritaires sont équipés de feux :
    a- Tournant bleus
    b- Clignotant bleus
    c- Tournants jaunes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q892.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°893',
    'libelle'=> "Lorsqu'un voyant s'allume au tableau de bord en circulation, il s‟agit :
    a- d'un indice informel
    b- d'un indice formel
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q893.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°894',
    'libelle'=> "Les indices inquiétants relatifs à mon véhicule peuvent se caractériser :
    a- par une odeur
    b- par un bruit
    c- par un voyant bleu sur le tableau de bord
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q894.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°895',
    'libelle'=> "L'utilisation de la climatisation du véhicule a une influence :
    a- Sur le confort
    b- Sur la sécurité
    c- Sur la consommation
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q895.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°896',
    'libelle'=> "Sur mon pare-brise, je dois apposer :
    a- La vignette fiscale en haut, à droite
    b- La vignette fiscale en bas, à droite
    c- Le certificat d'assurance en bas, à droite
    d- Le certificat d'assurance en bas à gauche
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q896.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°897',
    'libelle'=> "Mon assureur peut refuser de m‟indemniser en totalité ou partiellement si :
    a- Ma responsabilité est engagée
    b- Je ne portais pas la ceinture
    c- Je conduisais avec une alcoolémie positive
    d- Je ne portais pas les lunettes mentionnées sur mon permis
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abcd',
    'filename' => 'q897.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°898',
    'libelle'=> "Une différence importante de profondeur des rainures des pneus sur un même essieu a :
    a- une influence sur la tenue de route
    b- n‟a pas d‟influence sur la tenue de route
    c- a une influence sur la suspension
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q898.mp3',
    'extension' => 'mp3',
    'img' => '9',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°899',
    'libelle'=> "Sur le même essieu d'un véhicule:
    a- il n'est pas recommandé de monter des pneus de structures différentes
    b- il ne'st pas recommandé de monter des pneus de marques différentes
    c- il est recommandé de monter des pneus de structures différentes
    d- il est recommandé de monter des pneus de marques différentes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q899.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°900',
    'libelle'=> "La suspension a pour rôle d'assurer :
    a- le contact permanent du pneu avec la route
    b- la stabilité du véhicule
    c- le confort uniquement
    d- la sécurité
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abd',
    'filename' => 'q900.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°901',
    'libelle'=> "L'état des pneumatiques peut se contrôler :
    a- visuellement avant d‟utiliser le véhicule
    b- au moins une fois par mois avec un manomètre pour la pression
    c- uniquement lors des opérations d‟entretien prescrites par le constructeur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q901.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°902',
    'libelle'=> "Que faire si le niveau du liquide de frein baisse régulièrement dans le réservoir :
    a- je rajoute simplement du liquide
    b- je fais immédiatement vérifier mon véhicule
    c- j'attends la prochaine révision
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q902.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°903',
    'libelle'=> "La fréquence des opérations d‟entretien :
    a- est indiquée sur le carnet d'entretien du véhicule
    b- varie selon les véhicules
    c- est fixée par le conducteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q903.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 5,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°904',
    'libelle'=> "Sur une batterie dite sans entretien, je vérifie :
    a- le niveau d‟eau par transparence
    b- l'état des cosses
    c- rien, puisqu‟elle est sans entretien
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q904.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 6,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°905',
    'libelle'=> "Si le niveau de liquide de refroidissement est très bas :
    a- c'est dû à l‟évaporation
    b- je rajoute de l‟eau simplement
    c- je fais vérifier l‟étanchéité du circuit
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q905.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°906',
    'libelle'=> "Je fais vérifier rapidement mon véhicule si je constate une baisse importante du niveau :
    a- de l‟huile à moteur
    b- du liquide de frein
    c- du liquide de refroidissement
    d- du liquide de lave-glace
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q906.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°907',
    'libelle'=> "Il est recommandé d‟avoir à bord du véhicule :
    a- une lampe de poche
    b- un tournevis
    c- un chiffon
    d- un bidon d‟essence
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q907.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°908',
    'libelle'=> "Il est préférable, pour remorquer un véhicule
    a- d'utiliser une corde solide
    b- d‟utiliser une barre fixée aux points d‟ancrage prévus
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q908.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°909',
    'libelle'=> "La position du point mort concerne :
    a- le levier de vitesse lorsqu‟une vitesse n‟est enclenchée
    b- l'embrayage quant le moteur commence à entraîner les roues
    c- la boîte de vitesse en prise directe
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q909.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°910',
    'libelle'=> "Pour que le moteur entraine les roues alors qu‟une vitesse est enclenchée, il faut :
    a- embrayer
    b- débrayer
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q910.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°911',
    'libelle'=> "En marche normale, l'embrayage sert à :
    a- passer les vitesses
    b- démarrer le véhicule
    c- ralentir le véhicule
    d- exécuter une manœuvre
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q911.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°912',
    'libelle'=> "La liaison entre le moteur et les roues est établie sur le schéma :
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q912.mp3',
    'extension' => 'mp3',
    'img' => '912.png',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°913',
    'libelle'=> "Le 'point de patinage', c'est lorsque :
    a- le moteur transmet toute son énergie aux roues
    b- le moteur commence à entrainer les roues
    c- le moteur tourne sans entrainer les roues
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q913.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°914',
    'libelle'=> "L‟embrayage a pour Rôle
    a- d'assurer la liaison progressive entre le moteur et les roues
    b- de faire tourner le moteur plus vite
    c- d‟arrêter le véhicule
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q914.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°915',
    'libelle'=> "Un véhicule comporte obligatoirement :
    a- un indicateur de vitesse
    b- un compte –tours
    c- un compteur kilométrique
    d- une jauge de carburant
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'acd',
    'filename' => 'q915.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°916',
    'libelle'=> "On appelle 'angle mort' la partie de l'environnement que le conducteur :
    a- voit dans ses rétroviseurs
    b- voit directement au travers de son pare-brise
    c- ne peut voir au travers du pare-brise ou dans ses rétroviseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q916.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°917',
    'libelle'=> "
    L'importance de l'angle mort varie selon :
    a-le type de véhicule
    b- le nombre de vitres latérales
    c-le réglage des rétroviseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q917.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°918',
    'libelle'=> "Le frein moteur intervient dès qu‟on :
    a- lâche l‟accélérateur
    b- appuie sur la pédale de frein
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => '',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q918.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°919',
    'libelle'=> "Le conducteur doit intervenir le plus rapidement possible si l‟un de ces voyants s‟allume :
    a- en circulation
    b- alors qu‟il met le contact
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q919.mp3',
    'extension' => 'mp3',
    'img' => '919.png',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°920',
    'libelle'=> "Quelles sont les précautions à prendre en cas de crevaison :
    a) baliser les lieux,
    b) caler le véhicule,
    c)faire appel à son mécanicien
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'ab',
    'filename' => 'q920.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°921',
    'libelle'=> "Les feux de stop s'allument lorsque :
    a) Je rétrograde
    b) Je freine avec la pédale
    c) J‟enclenche la marche arrière
    d) Je change de direction
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q921.mp3',
    'extension' => 'mp3',
    'img' => '921.png',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°922',
    'libelle'=> "Je fais contrôler le système de freinage :
    a) Si la voiture se déporte à droite ou à gauche au freinage
    b) Si la course de la pédale est trop longue
    c) Si j‟entends des grincements au freinage
    d) Si mes feux de position ne s‟allument pas au freinage
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'abc',
    'filename' => 'q922.mp3',
    'extension' => 'mp3',
    'img' => '920.png',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°923',
    'libelle'=> "Pour réduire la consommation du carburant il faut :
    a) avoir le système d'allumage bien régler
    b) rouler avec porte-bagages chargé
    c) rouler avec des pneumatiques bien gonflés
    d) adapter la vitesse au régime du moteur
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q923.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°924',
    'libelle'=> "La pré-signalisation doit être indiquée par :
    a– les plaques d'immatriculation
    b- les feux de croisement
    c- le signal de détresse
    d- le triangle de pré-signalisatio
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'cb',
    'filename' => 'q924.mp3',
    'extension' => 'mp3',
    'img' => '924.png',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°925',
    'libelle'=> "Quels sont les feux obligatoires à l'avant d'un véhicule de tourisme :
    a) deux feux de route – deux feux de croisement – deux feux stop – deux feux de position
    – deux indicateurs de changement de direction – deux feux antibrouillard
    b) deux phares – deux codes – deux clignotants – deux feux de position – feux plaque
    d‟immatriculation – deux feux anti brouillard
    c) deux feux de route – deux indicateurs de changement de direction – deux feux de
    croisement – deux feux de position
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'c',
    'filename' => 'q925.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°926',
    'libelle'=> "Quels sont les organes essentiels pour le fonctionnement d‟un moteur à 4 temps ?
    a) La batterie – le carburateur – l‟alternateur
    b) Les phares – le pneu – les feux de croisement
    c) La boite régulatrice - l‟allumeur et la bougie
    d) Les feux stop – le rétroviseur – le klaxon",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'ac',
    'filename' => 'q926.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 7,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],


[
    'titre' => 'Question n°927',
    'libelle'=> "Quels sont dans l‟ordre les 4 temps d‟un moteur à essence ?
    a) Admission – compression – échappement – explosion
    b) Compression – admission – explosion – échappement
    c) Admission – compression – explosion – échappement
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q927.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 8,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°928',
    'libelle'=> "Ce panonceau concerne les véhicules tractant une remorque d‟un PTAC de :
    a) Plus de 250 kilogrammes
    b) 240 kilogrammes
    c) 80 kilogrammes
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => '',
    'e' => '',
    'reponse' => 'a',
    'filename' => 'q928.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 8,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°929',
    'libelle'=> "Les feux de stop s'allument lorsque :
    a) Je rétrograde
    b) Je freine avec la pédale
    c) J'enclenche la marche arrière
    d) Je change de direction
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'b',
    'filename' => 'q929.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 8,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
],

[
    'titre' => 'Question n°930',
    'libelle'=> "Les éléments qui font partie de la suspension d‟un véhicule automobile sont :
    a) Les ressorts et la transmission
    b) Les pneus
    c) Les amortisseurs et la boite de vitesses
    d) Les ressorts et les amortisseurs
    ",
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '',
    'reponse' => 'bd',
    'filename' => 'q930.mp3',
    'extension' => 'mp3',
    'img' => '',
    'sujet_id' => 8,
    'chapitre_id' =>10,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]
        ]);







    }
}
