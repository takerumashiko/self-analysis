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
            $questions = Question::where('class',30)->paginate(20);
        }elseif($user->question_number === 50){
            $questions = Question::whereIn('class',[30,50])->paginate(20);
        }else{
            $questions = Question::whereIn('class',[30,50,100])->paginate(20);
        }
        return view('users.show',[
            'user' => $user,
            'questions' => $questions
        ]);
    }
}
