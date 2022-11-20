<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
    protected $table = 'notes';
    protected $fillable = [
        'note',
        'apreciation',
        'description',
        'test_id',
        'user_id',
        "sujet_id",
        'chapitre_id'
    ];

    public  function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public  function sujets(){
        return $this->belongsTo(Sujets::class,'sujet_id','id');
    }

    public  function chapitres(){
        return $this->belongsTo(Sujets::class,'chapitre_id','id');
    }
}

