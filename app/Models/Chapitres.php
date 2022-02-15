<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapitres extends Model
{
    //
    protected $table = 'chapitres';

    public function sujets()
    {
        return $this->hasMany(Sujets::class,'chapitre_id');
    }
}
