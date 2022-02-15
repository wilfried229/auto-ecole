<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapitresCollection;
use App\Models\Chapitres;
use Illuminate\Http\Request;

class ChapitresController extends Controller
{


    public function listesChapitresApi(){
        
        $chapitres = Chapitres::where('titre','!=','VI')
        ->where('titre','!=','VII')
        ->where('titre','!=','VIII')
        ->where('titre','!=','IX')
                        ->get();

                        return response()->json($chapitres, 200);
  }

    public function listesChapitres(){
        $chapitres = Chapitres::where('titre','!=','VI')
                        ->where('titre','!=','VII')
                        ->where('titre','!=','VIII')
                        ->where('titre','!=','IX')
                        ->get();
        return view('chapitres.list',compact('chapitres'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chapitres = Chapitres::all();
        return view('chapitres.chapitre',compact('chapitres'));
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
        $chapitre = new Chapitres();
        $chapitre->titre = $request->titre;
        $chapitre->libelle = $request->libelle;

        $chapitre->save();

        return redirect()->route('chapitre.index');

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

        $chapitre = Chapitres::find($id);
        $chapitre->titre = $request->titre;
        $chapitre->libelle = $request->libelle;
        $chapitre->save();

        return redirect()->route('chapitre.index');

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
