<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\NotesGenerale;
use Illuminate\Http\Request;
use App\Models\User;

class HistoriqueController extends Controller
{
    //

    public function index(){
       $categorieNotes = ['TEST GENERAL','les 40 Sujets','CHAPITRE'];
        $notesTestGenerales = NotesGenerale::all();
        $notes = Notes::all();

       return view('home.historiques',compact('notesTestGenerales','categorieNotes','notes'));
    }
}
