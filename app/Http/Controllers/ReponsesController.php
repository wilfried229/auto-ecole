<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Reponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ReponsesController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reponses =DB::table('reponses')
        ->select('reponses.id','libelle','questions.titre as question','reponses.titre','question_id','reponse')
        ->join('questions','questions.id','=','reponses.question_id')
        ->get();

        $questions = Questions::all();


     return view('reponses.reponse',compact('reponses','questions'));
        //
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
        $reponse = new Reponses();
        $reponse->titre = $request->titre;
        $reponse->reponse = $request->reponse;
        $reponse->question_id = $request->question;

        $reponse->save();


        return redirect()->route('reponse.index');

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
        $reponse = Reponses::find($id);
        $reponse->titre = $request->titre;
        $reponse->reponse = $request->reponse;
        $reponse->question_id = $request->question;

        $reponse->save();

        return redirect()->route('reponse.index');

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
}
