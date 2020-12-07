<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;  

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
    
    public function show()
    {
        if(\Auth::check()){
            if(\Auth::user()->question_number === 30){
                $questions = Question::where('class',30)->get();
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }elseif(\Auth::user()->question_number === 50){
                $questions = Question::whereIn('class',[30,50])->get();
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }else{
                $questions = Question::whereIn('class',[30,50,100])->get();
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }
        }
        return view('questions.profile');
    }
    
}
