<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content','class'
    ];
    
    public function answers_user()
    {
        return $this->belongsToMany(User::class,'answers','question_id','user_id')->withTimestamps();    
    }
}
