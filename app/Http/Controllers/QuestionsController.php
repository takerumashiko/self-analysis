<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;  //追加

class QuestionsController extends Controller
{
    public function index()
    {
        $questions30 = Question::where('class',30)->get();
        $questions50 = Question::whereIn('class',[30,50])->get();
        $questions100 = Question::whereIn('class',[30,50,100])->get();
        
        return view('questions.question',[
            'questions30' => $questions30,
            'questions50' => $questions50,
            'questions100' => $questions100
        ]);
    }
    
    public function show($id)
    {
        
    }
}
