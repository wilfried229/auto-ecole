<?php
namespace App\Services;

use App\Models\Evaluations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class EvaluationServices {



    public static function save(array $data){
        $number = Cache::get('testSujetId');
        $evalution = Evaluations::create([
            'vrai' =>$data['vrai'],
            'question_choice' =>$data['question_choice'],
            'sujet_id' =>$data['sujet_id'],
            'user_id' =>Auth::user()->id,
            'chapitre_id' =>$data['chapitre_id'],
            'test_id' =>$number,
            'question_id' =>$data['question_id'],
            'is_finish'=>false,
        ]);
        return $evalution;
    }
}