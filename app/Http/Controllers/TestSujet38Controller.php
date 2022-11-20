<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Sujets;
use App\Services\TestSujetsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestSujet38Controller extends Controller
{
    //

    public function index()
    {
        $sujets = Sujets::all()->take(40);     
        return view('les38sujets.index', compact('sujets'));
    }


    public function listQuestion38($sujet_id)
    {
        $listQuestion  = Questions::where('sujet_id', $sujet_id)->paginate(1);
        if ($listQuestion->currentPage() == 1) TestSujetsServices::initialisationTest();        
        return view('les38sujets.questions', compact('listQuestion','sujet_id'));
    }
}
