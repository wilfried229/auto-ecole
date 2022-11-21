<?php

namespace App\Services;

use App\Models\NotesGenerale;
use App\Models\TestGenerale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class TestGeneraleServices
{


    public function __construct()
    {
        if (!Auth::check())
        {

        Redirect::to('/login');
        // The user is logged in...
        }
    }

    public static  $typeQuestions = ['a', 'b', 'c', 'd', 'e'];


    public static function saveTest($request)
    {

        try {
            $user = Auth::user();
            $number = Cache::get('testId');
            $testGenerales = new TestGenerale();
            $testGenerales->question_choice = $request->question_choice;
            $testGenerales->vrai = $request->vrai;
            $testGenerales->sujet_id = $request->sujet;
            $testGenerales->chapitre_id = $request->chapitre_id;
            $testGenerales->test_id = $number;
            $testGenerales->user_id = $user->id;
            $testGenerales->question_id = $request->question_id;
            $testGenerales->save();
            return $testGenerales;
        } catch (\Throwable $th) {
            Log::error("error" . $th->getMessage());
            return false;
        }
    }

    public static function saveNoteUserTestGenerale(array $data)
    {
        try {
            //code...
            $noteUser = NotesGenerale::create([
                'note' => $data['note'],
                'apreciation' => $data['apreciation'],
                'description' => $data['description'],
                'test_id' => $data['test_id'],
                'user_id' => $data['user_id'],
            ]);
            return $noteUser;
        } catch (\Exception $e) {
            return response()->json("Request erroné! . $e->getMessage()", 200);
        }
    }


    public static function resultatsQuestionByUser($users)
    {

        $lastIdEvaluation = TestGenerale::latest()
            ->where('is_finish', false)
            ->where('user_id', $users->id)
            ->first();
        $notesGenerales = TestGenerale::where('is_finish', false)
            ->where('user_id', $users->id)
            ->where('vrai', '!=', null)->count();

        $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';
        $data["note"] = $notesGenerales;
        $data["test_id"] = $lastIdEvaluation->test_id;
        $data["user_id"] = $users->id;
        $data["description"] = $description;
        switch ($notesGenerales) {
            case $notesGenerales < 10:
                $data["apreciation"] = "Faibles ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestGenerale($data);
                break;
            case $notesGenerales >= 10 and $notesGenerales <= 12:
                # code...
                $data["apreciation"] = "Passable! Vous devez redoubler d'effort";
                return self::saveNoteUserTestGenerale($data);
                break;
            case $notesGenerales >= 12 and $notesGenerales <= 14:
                # code...
                $data["apreciation"] = "Assez Bien ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestGenerale($data);
                break;
            case $notesGenerales >= 15 and $notesGenerales <= 16:
                # code...
                $data["apreciation"] = "Bien ! Vous devez redoubler d'effort";
                return self::saveNoteUserTestGenerale($data);
                break;
            case $notesGenerales >= 17 and $notesGenerales <= 18:
                # code...
                $data["apreciation"] = "Très Bien ! Félicitation";
                return self::saveNoteUserTestGenerale($data);
                break;

            case $notesGenerales == 20:
                # code...
                $data["apreciation"] = "Excelent ! Félicitation test réuissir avec succès";
                return  self::saveNoteUserTestGenerale($data);
                break;
            default:
                abort('400', 'Request Erroné');
                # code...
                break;
        }
    }


    public static function initialisationTest()
    {
        $testGenerales = TestGenerale::where('is_finish', false)->where('user_id', Auth::user()->id);
        $number = $testGenerales->latest('id')->first() == null ? 1 : $testGenerales->latest('id')->first()->test_id + 1;
        Cache::put('testId', $number);
        self::updateTestUsers();
        return $number;
    }

    public static function updateTestUsers()
    {
        $updateTestGeneral = TestGenerale::where('is_finish', false)->where('user_id', Auth::user()->id)
            ->update([
                "is_finish" => true,
            ]);
        return $updateTestGeneral;
    }

    public static function getTestGenerealeByUser(){
        $evaluationsTestGenrale = TestGenerale::where('is_finish', false)
        ->where('user_id', Auth::user()->id);
           return $evaluationsTestGenrale;
    }
}
