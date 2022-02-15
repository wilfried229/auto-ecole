<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chapitres;
use App\Models\Sujets;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\Evaluations;
use App\Models\Notes;
use App\Traits\SujetsSpeciaux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{

    use SujetsSpeciaux;


public function pageDownload(){

    return view("download");
}


    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf

        $headers = [
            'Content-Type' => 'application/vnd.android.package-archive',
            
         ];
      $file_path = public_path('drivetools.apk');

        return response()->download($file_path, 'drivetools.apk', $headers);

}

    public function uploadapi(Request $request){

        if(!$request->hasFile('fileName')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $allowedfileExtension=['pdf','jpg','png'];
        $file = $request->file('fileName');

        $extension = $file->getClientOriginalExtension();

        $check = in_array($extension,$allowedfileExtension);

        if($check) {

            Storage::disk('public')->putFileAS(
                'images/actuality/',
                $file,
                $file->getClientOriginalName()
            );
            return response()->json(['file_uploaded'], 200);

        } else {
            return response()->json(['invalid_file_format'], 422);
        }

        return response()->json(['file_uploaded'], 200);




    }
    public function store(Request $request)
    {
        if(!$request->hasFile('fileName')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $allowedfileExtension=['pdf','jpg','png'];
        $files = $request->file('fileName');
        $errors = [];

        foreach ($files as $file) {

            $extension = $file->getClientOriginalExtension();

            $check = in_array($extension,$allowedfileExtension);

            if($check) {
                foreach($request->fileName as $mediaFiles) {
                    $media = new Media();
                    $media_ext = $mediaFiles->getClientOriginalName();
                    $media_no_ext = pathinfo($media_ext, PATHINFO_FILENAME);
                    $mFiles = $media_no_ext . '-' . uniqid() . '.' . $extension;
                    $mediaFiles->move(public_path().'/images/', $mFiles);
                    $media->fileName = $mFiles;
                    $media->clientId = $request->clientId;
                    $media->uploadedBy = Auth::user()->id;
                    $media->save();
                }
            } else {
                return response()->json(['invalid_file_format'], 422);
            }

            return response()->json(['file_uploaded'], 200);

        }
    }

    public function sujets40(){
        $sujets = Sujets::all()->take(39);
        return response()->json($sujets, 200);
    }



    public function list40SujetByquestions($sujetId){

        $test = $this->sujetSpeciaux($sujetId);
        $question  = DB::table('questions')->whereIn('id',$test)->paginate(1);
        //$listQuestion  = Questions::where('sujet_id',$sujetId)->paginate(1);
        return response()->json($question, 200);
    }

    //
    public function listQuestionBySujet($sujetId,$chapitreId){

        $questions = Questions::where('sujet_id',$sujetId)->where('chapitre_id',$chapitreId)->get();


        return response()->json($questions, 200);
    }




    public function questionById($questionId){
        $questions = Questions::find($questionId);
        return response()->json($questions, 200);
    }


    public function questionBySujet($sujet){
        $questions = Questions::where('sujet_id',$sujet)->get();
        return response()->json($questions, 200);
    }

    /**
     * Correction api
     */
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

    /**
     *loading corection
     */

    public function pageResultats($userId,$sujet){

        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();
        $evaluation = Evaluations::where('test_id','=',$lastIdEvaluation->test_id)->where('sujet_id',$sujet)->where('user_id',$userId)->where('vrai','!=',null)->get();

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
                            ->where('user_id',$userId)
                            ->where('sujet_id',$sujet)
                            ->latest('id')
                            ->first();

       return response()->json([$note,$UserNameByChapitresSujet], 200);


    }



    public function  lastEvaluation(){
        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

        return response()->json($lastIdEvaluation, 200);
    }

    public function listesChapitresApi(){

        $chapitres = Chapitres::where('titre','!=','VII')
                        ->where('titre','!=','VIII')
                        ->where('titre','!=','IX')
                        ->where('titre','!=','X')
                        ->get();

                        return response()->json($chapitres, 200);
  }


    public function listSujetByChapitreID($id){

        $sujets  = DB::table('sujets')
        ->select('sujets.id','libelle','sujets.titre','chapitre_id','chapitres.titre  as chapitre')
        ->join('chapitres','chapitres.id','=','sujets.chapitre_id')
        ->where('chapitres.id','=',$id)
        ->get();
/*         $nameChapitre  = Chapitres::where('titre',$name)->first(); */
            return response()->json($sujets, 200);

    }



    public function sujetByChapitreQuestionapi($id){
        $listQuestion  = Questions::where('sujet_id',$id)->paginate(1);


           return response()->json(['listquestion' => $listQuestion], 200);



}


    /**
     * Evalution add note user test
     */
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
                return response()->json(['notes' => $notesGenerales,'appreciation'=>"Mediocre ! Vous devez redoubler d'effort" ,'question' => $question], 200);
                break;

            case $notesGenerales >=10 and $notesGenerales <=12:
                # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

                $this->saveNoteUser($notesGenerales,"Passable! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

                return response()->json(['notes' => $notesGenerales,'appreciation'=>"Passables! Vous devez redoubler d'effort ",'question' => $question], 200);

                break;

            case $notesGenerales >=12 and $notesGenerales <=14:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Assez Bien ! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

            return response()->json(['notes' => $notesGenerales,'appreciation'=>"Assez Bien ! Vous devez redoubler d'effort",'question' => $question], 200);

            break;

            case $notesGenerales >=15 and $notesGenerales <=16:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Bien! Vous devez redoubler d'effort",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);

            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Bien','question' => $question], 200);

            break;

            case $notesGenerales >=17 and $notesGenerales <=18:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Très Bien! Félicitation",$request->sujet,$request->chapitre,$request->user,$description,$lastIdEvaluation->test_id);


            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Très Bien ! Félicitation','question' => $question], 200);

            break;

            case $notesGenerales ==20:
            # code...
            $description = 'Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau';

            $this->saveNoteUser($notesGenerales,"Excelent ! Félicitation test réuissir avec succès",$request->sujet,$request->chapitre,$request->user,'Vous pouvez toute fois essayer de reprendre',$lastIdEvaluation->test_id);
            return response()->json(['notes' => $notesGenerales,'appreciation'=>'Excelent ! Félicitation test réuissir avec succès','question' => $question], 200);

            break;
            default:

            abort('400','Request Erroné');
            # code...
                break;
        }

    }



    // Save note
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


    /**
     * Test générale api get question
     */

    public function testGeneralesQuestionRandom($nQuestion){


        $root = random_int(1,100);
        $test = DB::table('questions')
        ->offset($root)
        ->limit(20)
        ->get();

        $testGenerales ="";

        $i = $nQuestion;


        foreach ($test as $key => $t) {
            $testGenerales = Questions::where('id',$t->id)->get()->first();
        }
        return response()->json(['testGenerales'=>$testGenerales,'i'=>(int)$i], 200);


    }

}
