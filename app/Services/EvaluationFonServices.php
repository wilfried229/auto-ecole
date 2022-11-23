<?php
namespace App\Services;

use App\EvaluationFon;
use App\Models\Evaluations;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class EvaluationFonServices {



    public static function save(array $data){
        $number = Cache::get('testSujetId');
        $evalution = EvaluationFon::create([
            'vrai' =>$data['vrai'],
            'question_choice' =>$data['question_choice'],
            'sujet_id' =>$data['sujet_id'],
            'user_id' =>Auth::user()->id,
            'test_id' =>$number,
            'question_id' =>$data['question_id'],
            'is_finish'=>false,
        ]);
        return $evalution;
    }



    public static function initialisationTest()
    {
        $evaluationsSujets = EvaluationFon::where('is_finish', false)->where('user_id', Auth::user()->id);
        $number = $evaluationsSujets->latest('id')->first() == null ? 1 : $evaluationsSujets->latest('id')->first()->test_id + 1;
        Cache::put('testSujetId', $number);
        self::updateTestUsers();
        return $number;
    }

    public static function updateTestUsers()
    {
        $updateTestGeneral = EvaluationFon::where('is_finish', false)->where('user_id', Auth::user()->id)
            ->update([
                "is_finish" => true,
            ]);
        return $updateTestGeneral;
    }


  
    

    public static function resultatsQuestionByUserSujets($users,$sujet_id)
    {
        $notesGenerales = self::getEvaluationByUser()->count();
        $number = Cache::get('testSujetId');
        $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';
        $data["note"] = $notesGenerales;
        $data["test_id"] = $number;
        $data["user_id"] = $users->id;
        $data["description"] = $description;
        $data["sujet_id"] = $sujet_id;

        switch ($notesGenerales) {
            case $notesGenerales < 10:
                $data["apreciation"] = "Faibles ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestSujets($data);
                break;
            case $notesGenerales >= 10 and $notesGenerales <= 12:
                # code...
                $data["apreciation"] = "Passable! Vous devez redoubler d'effort";
                return self::saveNoteUserTestSujets($data);
                break;
            case $notesGenerales >= 12 and $notesGenerales <= 14:
                # code...
                $data["apreciation"] = "Assez Bien ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestSujets($data);
                break;
            case $notesGenerales >= 15 and $notesGenerales <= 16:
                # code...
                $data["apreciation"] = "Bien ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestSujets($data);
                break;
            case $notesGenerales >= 17 and $notesGenerales <= 18:
                # code...
                $data["apreciation"] = "Très Bien ! Félicitation";
                return self::saveNoteUserTestSujets($data);
                break;

            case $notesGenerales == 20:
                # code...
                $data["apreciation"] = "Excelent ! Félicitation test réuissir avec succès";
                return  self::saveNoteUserTestSujets($data);
                break;
            default:
                abort('400', 'Request Erroné');
                # code...
                break;
        }
    }

    public static function saveNoteUserTestSujets(array $data)
    {
        try {
            //code...
            $noteUser = Notes::create([
                'note' => $data['note'],
                'apreciation' => $data['apreciation'],
                'description' => $data['description'],
                'test_id' => $data['test_id'],
                'user_id' => $data['user_id'],
                'sujet_id' => $data['sujet_id'],
                'chapitre_id' => $data['chapitre_id'] ?? NULL,
            ]);
            return $noteUser;
        } catch (\Exception $e) {
            return response()->json("Request erroné!".$e->getMessage(), 400);
        }
    }

    public static function getEvaluationByUser(){
     $evaluationsSujets = EvaluationFon::where('is_finish', false)
            ->where('user_id', Auth::user()->id)
            ->where('vrai', '!=', null);
        return $evaluationsSujets;
    }


    public static function getEvaluationByUserBySujet($sujet){
        $evaluationsSujets = EvaluationFon::where('is_finish', false)
               ->where('user_id', Auth::user()->id)
               ->where('sujet_id', $sujet);
           return $evaluationsSujets;
    }

    public static function getAnswerByUserBySujet($questionId){
        $evaluationsSujets = EvaluationFon::where('is_finish', false)
                ->where('user_id', Auth::user()->id)
                ->where('question_id', $questionId);
           return $evaluationsSujets;
    }
}