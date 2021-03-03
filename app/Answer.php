<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}