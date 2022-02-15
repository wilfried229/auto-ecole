<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Sujets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestSujet38Controller extends Controller
{
    //

    public function index(){

        $root = random_int(5,10);
        $test = DB::table('questions')
        ->offset($root)
        ->limit(20)
        ->get();
        $sujets = Sujets::all()->take(40);


       /// dd($sujets);
      // $sujets = DB::table('sujets')->offset($root)->take(40)->get();
       // dd($sujets);
        $arrays = [];
        foreach ($sujets as $key => $s) {
            $arrays[$s->id] = Questions::where('sujet_id',$s->id)->get();
        }


        return view('les38sujets.index',compact('sujets'));
    }


    public function listQuestion38($idQuestion){

        $listQuestion  = Questions::where('sujet_id',$idQuestion)->paginate(1);


        //dd($listQuestion);
        $lastIdEvaluation = DB::table('evaluations')->latest('id')->first();

        if (is_null($lastIdEvaluation)) {
            $lastIdEvaluation = 1;

        return view('les38sujets.questions',compact('listQuestion','lastIdEvaluation'));


        } else {
            $lastIdEvaluation = $lastIdEvaluation->test_id;


        return view('les38sujets.questions',compact('listQuestion','lastIdEvaluation'));


        }

    }
}
