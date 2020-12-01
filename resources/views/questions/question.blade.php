@extends('layouts.app')

@section('content')

    <h1 class="mt-4 text-center">自己分析を行う　{{ Auth::user()->question_number }}問</h1>
    <ul class="list-unstyled">
        @foreach($questions as $question)
            <li>
                <p class="mt-4 text-center">{{ $question->id }}. {{ $question->content}}</p>
                
            </li>
        @endforeach
    </ul>
    
@endsection
