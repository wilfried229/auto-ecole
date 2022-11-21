<?php

namespace App\Http\Controllers;

use App\Models\NotesGenerale;
use App\Models\Questions;
use App\Models\TestGenerale;
use App\Services\TestGeneraleServices;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestGeneralesController extends Controller
{
    //

    public function correctionTestGenerales($questionId)
    {

        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();
        $questionchoiceByUser = TestGenerale::where('is_finish', false)
         ->where('user_id', Auth::user()->id)
            ->where('question_id', $questionId)
            ->get()->first();

        $questions = Questions::where('id', $questionId)
            ->first();
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


    public function corrigerQuestionTest()
    {
        $users = Auth::user();
        $questionByTestGenerales = TestGeneraleServices::getTestGenerealeByUser()->get();
        return view('corriger.test_correction', compact('users', 'questionByTestGenerales'));
    }


    //question test générale

    public function testGenerales($nQuestion)
    {
        $i = $nQuestion;
        if ($i == 0) TestGeneraleServices::initialisationTest();
        $typeQuestions = TestGeneraleServices::$typeQuestions;
        $questions = Questions::inRandomOrder()->first();
        return view('questions.test_generale', compact('questions', 'i', 'typeQuestions'));
    }


    public function pageResultats()
    {
        $users = Auth::user();
        $note =  TestGeneraleServices::resultatsQuestionByUser($users);
        return  view('notes.loading-test-general', compact('note'));
    }


    public function addChoiceReponseUser(Request $request)
    {
        try {
            $testGenerales =  TestGeneraleServices::saveTest($request);
            return response()->json($testGenerales, 200);
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("error" . $th->getMessage());
            return response()->json($th->getMessage(), 200);
        }
    }
}
