<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;  //追加

class QuestionsController extends Controller
{
    public function index()
    {
        if(\Auth::user()->question_number === 30){
            $questions = Question::where('class',30)->get();
            return view('questions.question',[
                'questions' => $questions
            ]);
        }elseif(\Auth::user()->question_number === 50){
            $questions = Question::whereIn('class',[30,50])->get();
            return view('questions.question',[
                'questions' => $questions
            ]);
        }else{
            $questions = Question::whereIn('class',[30,50,100])->get();
            return view('questions.question',[
                'questions' => $questions
            ]);
        }
    }
}
