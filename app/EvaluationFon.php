<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationFon extends Model
{
    //   //
    protected $table = 'evaluation_fons';

    protected $fillable = [
        'vrai',
        'question_choice',
        'sujet_id',
        'user_id',
        'test_id',
        'question_id',
        'is_finish'
    ];

    public  function users()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public  function sujets()
    {

        return $this->belongsTo(Sujets::class, 'sujet_id', 'id');
    }

    public  function questions()
    {

        return $this->belongsTo(QuestionnaireFon::class, 'question_id', 'id');
    }
}
