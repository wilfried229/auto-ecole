<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireFon extends Model
{
    //
    protected $table = "questionnaire_fons";

    public $fillable = [
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
        'sujet_fons_id',
        'chapitre_id'
    ];
}
