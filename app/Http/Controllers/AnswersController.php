<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function index()
    {
        
    }
    
    public function store(Request $request)
    {
        $request->user()->answers()->create([
            'content' => $request->content,
        ]);
        
        return back();
    }
}
