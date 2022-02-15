<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sujets extends Model
{
    //
    protected $table = 'sujets';

    public function questions()
    {
        return $this->hasMany(Questions::class,'sujet_id');
    }
}
