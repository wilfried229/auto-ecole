<?php

use App\AutoEcole;
use Illuminate\Database\Seeder;

class AutoEcoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
        $noms = ['AUTO ECOLE REFERENCE DIVINE',
            "AUTO ECOLE PACIFIQUE",
            "AUTO ECOLE LA PERSEVERANCE." ,
            "AUTO ECOLE LE VAINQUEUR PLUS",
            "LA PYRAMIDE Sarl",
            "AUTO ECOLE BON SAMARITAIN",
            "AUTO ECOLE NOTRE DAME DE NAZARETH",
            "AUTO ECOLE ABONOVAN",
            "AUTO ECOLE AL-KOUDRA",
            "BEATITUDE",
            "BENEDICTION",
            'BON SAMARITAIN',
            'BONHEUR',
            'CHAMPION',
            'ENTENTE',
            'EXPERIANCE VIE',
            'EXPERIENXIA',
            'IMAMIA',
            'JESU DEGBE',
            'KBM',
            'LA PRUDENCE',
            'LA PRINCESSE',
            'LA PRINCESSE',
            'LA SOLUTION PLUS'
                ];

    foreach ($noms as $key => $value) {
         AutoEcole::create([
            'nom' =>$value
        ]);
     }
    
    }
}
