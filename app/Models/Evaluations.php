<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    //
    protected $table = 'evaluations';

    protected $fillable = [
        'vrai',
        'question_choice',
        'sujet_id',
        'user_id',
        'chapitre_id',
        'test_id',
        'question_id',
        'is_finish'
    ];

    public  function users(){

        return $this->belongsTo(User::class,'user_id','id');
    }

    public  function sujets(){

        return $this->belongsTo(Sujets::class,'sujet_id','id');
    }
    
    public  function chapitres(){

        return $this->belongsTo(Chapitres::class,'chapitre_id','id');
    }

    public  function questions(){

        return $this->belongsTo(Questions::class,'question_id','id');
    }


}
