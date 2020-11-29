<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;  //追加

class QuestionsController extends Controller
{
    public function index()
    {
        $questions=Question::all();
        return view('questions.question',[
            'questions'=>$questions
        ]);
    }
}
