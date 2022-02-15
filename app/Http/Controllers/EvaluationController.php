<?php

namespace App\Http\Controllers;

use App\Models\Evaluations;
use App\Models\Notes;
use App\Models\Questions;
use App\Models\Sujets;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EvaluationController extends Controller
{



    public function corrigerUser($user,$sujet,$questionId){

        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

        $questionchoiceByUser = Evaluations::where('user_id',$user)
                                            ->where('sujet_id',$sujet)
                                            ->where('test_id',$lastIdEvaluation->test_id)
                                            ->where('question_id',$questionId)
                                            ->get()->first();

        $questions = Questions::where('sujet_id',$sujet)
                                ->where('id',$questionId)
                                ->first();


        /* $questionReponses = DB::table('reponses')
        ->select('reponse','reponses.titre',
        'question_id','questions.libelle',
        'questions.extension')
        ->join('questions','questions.id','=','reponses.question_id')
        ->where('sujet_id',$sujet)
        ->where('question_id',$questionId)
        ->first(); */

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

    public function corriger($sujet){
        $questions = Questions::where('sujet_id',$sujet)->get();
        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

        $evaluation = Evaluations::where('sujet_id',$sujet)
                        ->where('user_id',1)
                        ->where('test_id',$lastIdEvaluation->test_id)
                        ->get();
        $sujets = Sujets::all();



        //dd($questionReponses);
        $UserNameByChapitresSujet = DB::table('evaluations')
                                        ->select('sujet_id','users.name','users.prenom','chapitres.titre',
                                        'chapitres.libelle','sujets.titre as sujet','question_id','evaluations.created_at')
                                        ->join('users','users.id','=','evaluations.user_id')
                                        ->join('sujets','sujets.id','=','evaluations.sujet_id')
                                        ->join('chapitres','chapitres.id','=','evaluations.chapitre_id')
                                        ->where('test_id','=',$lastIdEvaluation->test_id)
                                        ->where('sujet_id',$sujet)
                                        ->where('user_id',1)
                                        ->where('vrai','!=',null)
                                        ->first();

        return view('corriger.correction',compact('questions','sujets','UserNameByChapitresSujet'));
    }

    public function pageResultats($id,$sujet){

        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();
        $evaluation = Evaluations::where('test_id','=',$lastIdEvaluation->test_id)->where('sujet_id',$sujet)->where('user_id',1)->where('vrai','!=',null)->get();

        $notesGenerales = count($evaluation);

        $UserNameByChapitresSujet = DB::table('evaluations')
                                        ->select('sujet_id','users.name','users.prenom','chapitres.titre','chapitres.libelle','sujets.titre as sujet','evaluations.created_at')
                                        ->join('users','users.id','=','evaluations.user_id')
                                        ->join('sujets','sujets.id','=','evaluations.sujet_id')
                                        ->join('chapitres','chapitres.id','=','evaluations.chapitre_id')
                                        ->where('test_id','=',$lastIdEvaluation->test_id)
                                        ->where('sujet_id',$sujet)
                                        ->where('user_id',1)
                                        ->first();

        $note = Notes::where('test_id',$lastIdEvaluation->test_id)
                            ->where('user_id',1)
                            ->where('sujet_id',$sujet)
                            ->first();

    return  view('notes.loading',compact('UserNameByChapitresSujet','note'));


    }


    public function addChoiceReponseUser(Request $request){

        $evaluations = Evaluations::where('test_id','=',$request->test_id)->where('sujet_id',$request->sujet)->where('user_id',$request->user_id)->get();

        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();
        $nbreQuestion = count($evaluations);
        $number = 1;
        if ($nbreQuestion == 20) {
            $numbers =$lastIdEvaluation->test_id +1;
            $evaluation = new Evaluations();
            $evaluation->question_choice = $request->question_choice;
            $evaluation->vrai = $request->vrai;
            $evaluation->sujet_id = $request->sujet;
            $evaluation->chapitre_id = $request->chapitre_id;
            $evaluation->test_id = $numbers;
            $evaluation->user_id = $request->user_id;
            $evaluation->question_id = $request->question_id;

            $evaluation->save();

            # code...
        } else if (is_null($lastIdEvaluation)) {
            # code...
            $evaluation = new Evaluations();
            $evaluation->question_choice = $request->question_choice;
            $evaluation->vrai = $request->vrai;
            $evaluation->sujet_id = $request->sujet;
            $evaluation->chapitre_id = $request->chapitre_id;
            $evaluation->test_id = $number;
            $evaluation->user_id = $request->user_id;
            $evaluation->question_id = $request->question_id;
            $evaluation->save();
        }

        else {

            $evaluation = new Evaluations();
            $evaluation->question_choice = $request->question_choice;
            $evaluation->vrai = $request->vrai;
            $evaluation->sujet_id = $request->sujet;
            $evaluation->chapitre_id = $request->chapitre_id;
            $evaluation->test_id = $lastIdEvaluation->test_id;
            $evaluation->user_id = $request->user_id;
            $evaluation->question_id = $request->question_id;

            $evaluation->save();

            # code...
        }


        return response()->json($evaluation, 200);
    }


        public function addNoteUserBySujet(Request $request){

            $notes = new Notes();
            $notes->note = $request->note;
            $notes->apreciation = $request->apreciation;
            $notes->sujet_id = $request->sujet;
            $notes->chapitre_id = $request->chapitre_id;
            $notes->user_id = $request->user_id;

            return response()->json($notes->note, 200);
        }



        public function resultatsQuestionByUser(Request $request){


            $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

        $evaluations = Evaluations::where('test_id','=',$lastIdEvaluation->test_id)
                        ->where('sujet_id',$request->sujet)
                        ->where('user_id',1)->where('vrai','!=',null)->get();

          $notesGenerales = count($evaluations);

         $question = Questions::where('sujet_id',$request->sujet)->get()->first();


            switch ($notesGenerales) {

                case $notesGenerales <10:

                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';
                $this->saveNoteUser($notesGenerales,"Faibles ! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);
                    return response()->json(['notes' => $notesGenerales,'appreciation'=>'Mediocre','question' => $question], 200);
                    break;

                case $notesGenerales >=10 and $notesGenerales <=12:
                    # code...
                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                    $this->saveNoteUser($notesGenerales,"Passable! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

                    return response()->json(['notes' => $notesGenerales,'appreciation'=>'Passables','question' => $question], 200);

                    break;

                case $notesGenerales >=12 and $notesGenerales <=14:
                # code...
                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Assez Bien ! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Assez Bien','question' => $question], 200);

                break;

                case $notesGenerales >=15 and $notesGenerales <=16:
                # code...
                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Bien ! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Bien','question' => $question], 200);

                break;

                case $notesGenerales >=17 and $notesGenerales <=18:
                # code...
                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Très Bien ! Félicitation",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);


                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Très Bien','question' => $question], 200);

                break;

                case $notesGenerales ==20:
                # code...
                $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Excelent ! Félicitation test réuissir avec succès",$request->sujet,$request->chapitre,$request->user,'Vous pouvez toute fois essayer de reprendre',$lastIdEvaluation->test_id);
                return response()->json(['notes' => $notesGenerales,'appreciation'=>'Excelent','question' => $question], 200);

                break;
                default:

                abort('400','Request Erroné');
                # code...
                    break;
            }

        }
        //


        private function saveNoteUser($note,$appreciation,$sujet,$chapitre,$user,$description,$testID){



            //$lastIdEvaluation = DB::table('evaluations')->latest('id')->first();


                $noteUser = new Notes();
                $noteUser->note = $note;
                $noteUser->apreciation = $appreciation;
                $noteUser->description = $description;
                $noteUser->test_id = $testID;
                $noteUser->sujet_id = $sujet;
                $noteUser->chapitre_id = $chapitre;
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


        private function saveNumberExamenTest($sujet,$user){


            $notes = count(Test::where('user_id','=',$user)->where('sujet_id','=',$sujet)->get());

            try {

                $number = 1;
                $numbers = $notes+1;

                if ($notes == 0) {

                    $test = new Test();
                    $test->titre = 'test'.$number;
                    $test->number = $number;
                    $test->sujet_id = $sujet;
                    $test->user_id = $user;

                    $test->save();

                    return $test;
                    # code...
                } else {
                    # code...
                    $test = new Test();
                    $test->titre = 'test'.$numbers;
                    $test->number = $numbers;
                    $test->sujet_id = $sujet;
                    $test->user_id = $user;

                    $test->save();

                    return $test;
                }

                //code...
            } catch (\Exception $e) {
                //throw $th;

                abort(404,'Erreur de request');
            }
        }

}
