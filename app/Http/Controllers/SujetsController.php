<?php

namespace App\Http\Controllers;

use App\Models\Chapitres;
use App\Models\Sujets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SujetsController extends Controller
{


    // api

    public function listSujetByChapitreID($id){

        $sujets  = DB::table('sujets')
        ->select('sujets.id','libelle','sujets.titre','chapitre_id','chapitres.titre  as chapitre')
        ->join('chapitres','chapitres.id','=','sujets.chapitre_id')
        ->where('chapitres.id','=',$id)
        ->get();
/*         $nameChapitre  = Chapitres::where('titre',$name)->first(); */
            return response()->json($sujets, 200);

    }


    public function sujet38(){


        return view('sujets.sujet38');
    }

    public function listSujetByChapitre($name){

        $sujets  = DB::table('sujets')
        ->select('sujets.id','libelle','sujets.titre','chapitre_id','chapitres.titre  as chapitre')
        ->join('chapitres','chapitres.id','=','sujets.chapitre_id')
        ->where('chapitres.titre','=',$name)
        ->get();

        //dd($sujets,$name);
        $nameChapitre  = Chapitres::where('titre',$name)->first();
        return view('sujets.list',compact('sujets','nameChapitre'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*
        $sujets  = DB::table('sujets')
        ->select('sujets.id','libelle','sujets.titre','chapitre_id','chapitres.titre  as chapitre')
        ->join('chapitres','chapitres.id','=','sujets.chapitre_id')
        ->get(); */

        $sujets = Sujets::all();
        $chapitres = Chapitres::all();
      $test =  DB::table('sujets')
        ->select('titre')
        ->where('chapitre_id','=',1)
        ->get();
        $allsData = [];
        foreach ($chapitres as $key => $chp) {
            foreach ($sujets as $i => $s) {
                if ($s->chapitre_id == $chp->id) {
                    $allsData[$chp->id] =  DB::table('sujets')
                    ->select('titre','id','chapitre_id')
                    ->where('chapitre_id','=',$chp->id)
                    ->get();
                         # code...
                }                # code...
            }
        }
        return view('sujets.sujet',compact('sujets','chapitres','allsData'));
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
        $sujet = new Sujets();
        $sujet->titre = $request->titre;
        $sujet->chapitre_id = $request->chapitre;
        $sujet->save();
        return redirect()->route('sujet.index');

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
        $sujet = Sujets::find($id);
        $sujet->titre = $request->titre;
        $sujet->chapitre_id = $request->chapitre;
        $sujet->save();
        return redirect()->route('sujet.index');
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
