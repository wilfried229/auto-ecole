<?php

use App\Models\Paiement;


class PaiementService {


    public static function createdPaiement(){


        $paiements = Paiement::create([

        ]);

        return $paiements;
    }
    
}