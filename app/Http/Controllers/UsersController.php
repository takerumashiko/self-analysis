<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Question;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('users.index',[
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        if($user->question_number === 30){
            $questions = Question::where('class',30)->get();
        }elseif($user->question_number === 50){
            $questions = Question::whereIn('class',[30,50])->get();
        }else{
            $questions = Question::whereIn('class',[30,50,100])->get();
        }
        return view('users.show',[
            'user' => $user,
            'questions' => $questions
        ]);
    }
}
