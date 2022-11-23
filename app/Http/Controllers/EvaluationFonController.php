<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\QuestionnaireFon;
use App\Services\EvaluationFonServices;
use App\Services\EvaluationServices;
use App\SujetFon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationFonController extends Controller
{
    //


    public function index()
    {
        $sujets = SujetFon::all()->take(40);     
        return view('fon.index', compact('sujets'));
    }


    public function listQuestion38($sujet_id)
    {
        $listQuestion  = QuestionnaireFon::where('sujet_fons_id', $sujet_id)->paginate(1);
        if ($listQuestion->currentPage() == 1)  EvaluationFonServices::initialisationTest();        
        return view('fon.questions', compact('listQuestion','sujet_id'));
    }

    public function corrigerUser($questionId)
    {

        $questionchoiceByUser = EvaluationFonServices::getAnswerByUserBySujet($questionId)->first();
        $questions = QuestionnaireFon::where('id', $questionId)->first();
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
        $listQuestionTests = EvaluationFonServices::getEvaluationByUserBySujet($sujet)->get();
        //dd($listQuestionTests);
        return view('fon.correction', compact('listQuestionTests'));
    }

    public function pageResultats($sujet)
    {
        $users = Auth::user();
        $UserNameByChapitresSujet = EvaluationFonServices::getEvaluationByUser()->first();
        $note =  EvaluationFonServices::resultatsQuestionByUserSujets($users, $sujet);
        return  view('fon.note.loading', compact('UserNameByChapitresSujet', 'note'));
    }


    public function addChoiceReponseUser(Request $request)
    {
        $data['vrai'] = $request->vrai;
        $data["question_choice"] = $request->question_choice;
        $data["sujet_id"] = $request->sujet;
        $data["question_id"] = $request->question_id;
        $evaluation = EvaluationFonServices::save($data);
        return response()->json($evaluation, 200);
    }


   

}
