<?php

namespace App\Http\Controllers;

use App\Models\Evaluations;
use App\Models\Notes;
use App\Models\Questions;
use App\Models\Sujets;
use App\Models\Test;
use App\Services\EvaluationServices;
use App\Services\TestSujetsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EvaluationController extends Controller
{



    public function corrigerUser($questionId)
    {

        $questionchoiceByUser = TestSujetsServices::getAnswerByUserBySujet($questionId)->first();
        $questions = Questions::where('id', $questionId)->first();
        if ($questions != null) {
            if ($questions->reponse == $questionchoiceByUser->question_choice) {
                $data = array('message' => 'Vrai', 'reponse' => $questions->reponse, 'questionChoice' => $questionchoiceByUser->question_choice,'srcImg' =>$questions->img);
                return response()->json($data, 200);
            } else {
                $data = array('message' => 'Faux', 'reponse' => $questions->reponse, 'questionChoice' => $questionchoiceByUser->question_choice,'srcImg' =>$questions->img);
                return response()->json($data, 200);
            }
        }
    }

    public function corriger($sujet)
    {
        $listQuestionTests = TestSujetsServices::getEvaluationByUserBySujet($sujet)->get();
        return view('corriger.correction', compact('listQuestionTests'));
    }

    public function pageResultats($sujet)
    {
        $users = Auth::user();
        $UserNameByChapitresSujet = TestSujetsServices::getEvaluationByUser()->first();
        $note =  TestSujetsServices::resultatsQuestionByUserSujets($users, $sujet);
        return  view('notes.loading', compact('UserNameByChapitresSujet', 'note'));
    }


    public function addChoiceReponseUser(Request $request)
    {
        $data['vrai'] = $request->vrai;
        $data["question_choice"] = $request->question_choice;
        $data["sujet_id"] = $request->sujet;
        $data["chapitre_id"] = $request->chapitre_id;
        $data["question_id"] = $request->question_id;
        $evaluation = EvaluationServices::save($data);
        return response()->json($evaluation, 200);
    }


    public function addNoteUserBySujet(Request $request)
    {
        $notes = new Notes();
        $notes->note = $request->note;
        $notes->apreciation = $request->apreciation;
        $notes->sujet_id = $request->sujet;
        $notes->chapitre_id = $request->chapitre_id;
        $notes->user_id = $request->user_id;
        return response()->json($notes->note, 200);
    }

}
