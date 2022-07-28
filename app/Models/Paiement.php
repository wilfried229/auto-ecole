<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    //

    protected $table = "paiement";

    protected  $fillable  =[

        'amount','tel','type_paiement','code_visa','feday_token','status'
    ];

    
}
