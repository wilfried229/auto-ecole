<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    
    protected $fillable = [

        'titre',
        'libelle',
        'a',
        'b',
        'c',
        'd',
        'e',
        'reponse',
        'extension',
        'img',
        'sujet_id',
        'chapitre_id'

    ];

    public  function sujets(){
        return $this->belongsTo(Sujets::class,'sujet_id','id');
    }
    
    public  function chapitres(){
        return $this->belongsTo(Chapitres::class,'chapitre_id','id');
    }

    //
}
