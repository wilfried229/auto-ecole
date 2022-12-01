<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class NotesGenerale extends Model
{
    //
    protected $table = "notes_generales";

    protected $fillable = [
        'note',
        'apreciation',
        'description',
        'test_id',
        'user_id'
    ];

    public  function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }


    

}
