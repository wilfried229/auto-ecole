<?php

namespace App\Http\Controllers;

use App\Models\Chapitres;
use App\Models\Notes;
use App\Models\Questions;
use App\Models\Reponses;
use App\Models\Sujets;
use App\Models\Test;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{



    public function listQuestionBySujet($chapitreId,$sujetId){
        
    }



    public function sujetByChapitreQuestionapi($id){
        $listQuestion  = Questions::where('sujet_id',$id)->paginate(1);
       // $question = Questions::where('sujet_id',$id)->get()->first();

        $chapitre = DB::table('sujets')->select('chapitres.titre')
        ->join('chapitres','chapitres.id','=','sujets.chapitre_id')
        ->where('sujets.id','=',$id)->get()->first();


        //$chapitre = Chapitres::where('titre',$namechapitres)->first();
           //$reponses = $this->questionReponses($listQuestion);

       $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

       if (is_null($lastIdEvaluation)) {
           $lastIdEvaluation = 1;

           return response()->json(['listquestion' => $listQuestion,'chapitre' => $chapitre->titre,'lastIdEvaluation' => $lastIdEvaluation], 200);

       } else {
           $lastIdEvaluation = $lastIdEvaluation->test_id;

           return response()->json(['listquestion' => $listQuestion,'chapitre' => $chapitre->titre  ,'lastIdEvaluation' => $lastIdEvaluation], 200);

       }

    }


    public function sujetByChapitreQuestionLearn($id, $namechapitre){

    }



    public function sujetByChapitreQuestion($id,$namechapitres){
        $chapitre = Chapitres::where('titre',$namechapitres)->first();

         $listQuestion  = Questions::where('sujet_id',$id)
                                ->where('chapitre_id',$chapitre->id)
                                ->paginate(1);
         $question = Questions::where('sujet_id',$id)->get()->first();
            $reponses = $this->questionReponses($listQuestion);


        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

    //dd($listQuestion);
        if (is_null($lastIdEvaluation)) {
            $lastIdEvaluation = 1;

         return view('questions.examen',compact('listQuestion','reponses','lastIdEvaluation','question','chapitre'));

        } else {
            $lastIdEvaluation = $lastIdEvaluation->test_id;


         return view('questions.examen',compact('listQuestion','reponses','lastIdEvaluation','question','chapitre'));

        }
            //$notes = $this->saveNumberExamenTest($id,1);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $questions = Questions::all();
        $sujets = Sujets::all();

        return view('questions.question',compact('questions','sujets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $question  = new Questions();
        $question->titre = $request->titre;
        $question->libelle = $request->libelle;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->sujet_id = $request->sujet;

        if (Input::file('audio') || Input::file('image')) {
        $audio = Input::file('audio');
        $question->filename = $audio->getClientOriginalName();
        $question->extension = $audio->getClientOriginalExtension();
        $img = Input::file('image');
        $question->img = $img->getClientOriginalName().$img->getClientOriginalExtension();
        $question->save();
        $this->UploadFileAudio($audio,$question);

        }

        return redirect()->route('question.index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $question  = Questions::find($id);
        $question->titre = $request->titre;
        $question->libelle = $request->libelle;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->b;
        $question->d = $request->d;
        $question->sujet_id = $request->sujet;

        if (Input::file('audio') !=null) {
        $audio = Input::file('audio');
        $question->filename = $audio->getClientOriginalName();
        $question->extension = $audio->getClientOriginalExtension();
        $question->save();
        $this->UploadFileAudio($audio,$question);

        return redirect()->route('question.index');

        }else{

        $question->save();

        return redirect()->route('question.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function UploadFileAudio($audioFile,$upload)
    {

        try {

            Storage::disk('public')->putFileAS(
                'audios/questions/'.$audioFile->getClientOriginalExtension(),
                $audioFile,
                $upload->filename

            );


        } catch (\Exception $e) {
            //throw $th;
            return false;
        }

            return true;

        }


        private function questionReponses($listQuestion){
            $reponses = [];
            foreach ($listQuestion as $key => $l) {
                # code...
            $reponses[$key] = Reponses::where('question_id',$l->id)->first();

            }

            return $reponses;

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

