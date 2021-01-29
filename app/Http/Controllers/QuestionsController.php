<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;  

class QuestionsController extends Controller
{
    public function index()
    {
        if(\Auth::user()->question_number === 30){
            $questions = Question::where('class',30)->paginate(30);
            return view('questions.question',[
                'questions' => $questions
            ]);
        }elseif(\Auth::user()->question_number === 50){
            $questions = Question::whereIn('class',[30,50])->paginate(30);
            return view('questions.question',[
                'questions' => $questions
            ]);
        }else{
            $questions = Question::whereIn('class',[30,50,100])->paginate(30);
            return view('questions.question',[
                'questions' => $questions
            ]);
        }
    }
    
    public function show()
    {
        if(\Auth::check()){
            if(\Auth::user()->question_number === 30){
                $questions = Question::where('class',30)->paginate(20);
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }elseif(\Auth::user()->question_number === 50){
                $questions = Question::whereIn('class',[30,50])->paginate(20);
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }else{
                $questions = Question::whereIn('class',[30,50,100])->paginate(20);
                return view('questions.profile',[
                    'questions' => $questions
                ]);
            }
        }
        return view('questions.profile');
    }
    
    public function store(Request $request)
    {
        
        $request->validate([
            'answers'=>'max:255'
        ]);
        
        $request->user()->answers()->create([
            'answers' => $request->answers,
        ]);
        
        return redirect('/');
    }
}
