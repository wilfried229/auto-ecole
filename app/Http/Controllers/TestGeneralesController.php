<?php

namespace App\Http\Controllers;

use App\Models\NotesGenerale;
use App\Models\Questions;
use App\Models\TestGenerale;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestGeneralesController extends Controller
{
    //

    public function correctionTestGenerales ($user,$questionId){

        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();

        $questionchoiceByUser = TestGenerale::where('user_id',$user)
                                            ->where('test_id',$lastIdEvaluation->test_id)
                                            ->where('question_id',$questionId)
                                            ->get()->first();

        $questions = Questions::where('id',$questionId)
                                ->first();


        if ($questions != null) {
            if ($questions->reponse == $questionchoiceByUser->question_choice) {
                $data = array('message' => 'Vrai','reponse' =>$questions->reponse,'questionChoice' => $questionchoiceByUser->question_choice);
         return response()->json($data, 200);
            } else {
         $data = array('message' => 'Faux','reponse' =>$questions->reponse,'questionChoice' => $questionchoiceByUser->question_choice);
         return response()->json($data, 200);
            }

        }

    }


    public function corrigerQuestionTest($user){
        /* $questions = Questions::where('sujet_id',$sujet)->get(); */
        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();


        $users = User::find($user);

        $questionByTestGenerales = DB::table('test_generales')
                        ->select('test_generales.id','question_id','questions.titre','questions.filename','questions.extension')
                        ->join('users','users.id','=','test_generales.user_id')
                        ->join('questions','questions.id','=','test_generales.question_id')
                        ->where('test_id','=',$lastIdEvaluation->test_id)
                        ->where('user_id',$user)
                        ->get();


        return view('corriger.test_correction',compact('users','questionByTestGenerales'));
    }


    //question test générale
    
    public function testGenerales($nQuestion){


        $root = random_int(5,100);
        $test = DB::table('questions')
        ->offset($root)
        ->limit(20)
        ->get();

        $testID = ['0','1','2'];
        $testGenerales = [];
        $i = $nQuestion;
        foreach ($test as $key => $t) {
            $testGenerales[$i] = Questions::find($t->id);

        }

            $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();

            if (is_null($lastIdEvaluation)) {
                $lastIdEvaluation = 1;

            return view('questions.test_generale',compact('testGenerales','i','lastIdEvaluation'));

            } else {
                $lastIdEvaluation = $lastIdEvaluation->test_id;

                return view('questions.test_generale',compact('testGenerales','i','lastIdEvaluation'));

            }

    }


    public function pageResultats($user_id){

        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();
        $evaluation = TestGenerale::where('test_id','=',$lastIdEvaluation->test_id)->where('user_id',$user_id)->where('vrai','!=',null)->get();

        $notesGenerales = count($evaluation);

        $UserNameByChapitresSujet = DB::table('test_generales')
                                        ->select('sujet_id','users.name','users.prenom','chapitres.titre','chapitres.libelle','sujets.titre as sujet','test_generales.created_at')
                                        ->join('users','users.id','=','test_generales.user_id')
                                        ->join('sujets','sujets.id','=','test_generales.sujet_id')
                                        ->join('chapitres','chapitres.id','=','test_generales.chapitre_id')
                                        ->where('test_id','=',$lastIdEvaluation->test_id)
                                        ->where('user_id',$user_id)
                                        ->first();

        $note = NotesGenerale::where('test_id',$lastIdEvaluation->test_id)
                            ->where('user_id',1)
                            ->first();

    return  view('notes.loadingtestgeneral',compact('UserNameByChapitresSujet','note'));


    }


    public function addChoiceReponseUser(Request $request){

        $evaluations = TestGenerale::where('test_id','=',$request->test_id)->where('user_id',$request->user_id)->get();

        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();
        $nbreQuestion = count($evaluations);
        $number = 1;


        if ($nbreQuestion == 20) {
            $numbers =$lastIdEvaluation->test_id +1;
            $testGenerales = new TestGenerale();
            $testGenerales->question_choice = $request->question_choice;
            $testGenerales->vrai = $request->vrai;
            $testGenerales->sujet_id = $request->sujet;
            $testGenerales->chapitre_id = $request->chapitre_id;
            $testGenerales->test_id = $numbers;
            $testGenerales->user_id = $request->user_id;
            $testGenerales->question_id = $request->question_id;

            $testGenerales->save();

            # code...
        } else if (is_null($lastIdEvaluation)) {
            # code...
            $testGenerales = new TestGenerale();
            $testGenerales->question_choice = $request->question_choice;
            $testGenerales->vrai = $request->vrai;
            $testGenerales->sujet_id = $request->sujet;
            $testGenerales->chapitre_id = $request->chapitre_id;
            $testGenerales->test_id = $number;
            $testGenerales->user_id = $request->user_id;
            $testGenerales->question_id = $request->question_id;
             $testGenerales->save();
        }

        else {

            $testGenerales = new TestGenerale();
            $testGenerales->question_choice = $request->question_choice;
            $testGenerales->vrai = $request->vrai;
            $testGenerales->sujet_id = $request->sujet;
            $testGenerales->chapitre_id = $request->chapitre_id;
            $testGenerales->test_id = $lastIdEvaluation->test_id;
            $testGenerales->user_id = $request->user_id;
            $testGenerales->question_id = $request->question_id;

            $testGenerales->save();

        }


        return response()->json($testGenerales, 200);
    }


    public function resultatsQuestionByUser(Request $request){


        $lastIdEvaluation = DB::table('test_generales')->latest('id')->first();

    $evaluations = TestGenerale::where('test_id','=',$lastIdEvaluation->test_id)
                    ->where('user_id',1)->where('vrai','!=',null)->get();

      $notesGenerales = count($evaluations);

     $question ="";

     /* Questions::where('sujet_id',$request->sujet)->get()->first() */

        switch ($notesGenerales) {

            case $notesGenerales <10:

            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';
            $this->saveNoteUser($notesGenerales,"Faibles ! Vous devez redoubler d'effort",$request->user,$description,$lastIdEvaluation->test_id);
                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Mediocre','question' => $question], 200);
                break;

            case $notesGenerales >=10 and $notesGenerales <=12:
                # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Passable! Vous devez redoubler d'effort",$request->user,$description,$lastIdEvaluation->test_id);

                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Passables','question' => $question], 200);

                break;

            case $notesGenerales >=12 and $notesGenerales <=14:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Assez Bien ! Vous devez redoubler d'effort",$request->user,$description,$lastIdEvaluation->test_id);

            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Assez Bien','question' => $question], 200);

            break;

            case $notesGenerales >=15 and $notesGenerales <=16:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Bien ! Vous devez redoubler d'effort",$request->user,$description,$lastIdEvaluation->test_id);

            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Bien','question' => $question], 200);

            break;

            case $notesGenerales >=17 and $notesGenerales <=18:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Très Bien ! Félicitation",$request->user,$description,$lastIdEvaluation->test_id);


            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Très Bien','question' => $question], 200);

            break;

            case $notesGenerales ==20:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Excelent ! Félicitation test réuissir avec succès",$request->user,'Vous pouvez toute fois essayer de reprendre',$lastIdEvaluation->test_id);
            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Excelent','question' => $question], 200);

            break;
            default:

            abort('400','Request Erroné');
            # code...
                break;
        }

    }


    private function saveNoteUser($note,$appreciation,$user,$description,$testID){

        //$lastIdEvaluation = DB::table('evaluations')->latest('id')->first();
            $noteUser = new NotesGenerale();
            $noteUser->note = $note;
            $noteUser->apreciation = $appreciation;
            $noteUser->description = $description;
            $noteUser->test_id = $testID;
            $noteUser->user_id = $user;

            $noteUser->save();
            return $noteUser;
        try {
    //code...
        } catch (\Exception $e) {
            //throw $th;
            return 'Request erroné!'.$e->getMessage();

        }

    }


}
