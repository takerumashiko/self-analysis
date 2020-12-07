@extends('layouts.app')

@section('content')

    <h1 class="mt-4 text-center">自己分析を行う　{{ Auth::user()->question_number }}問</h1>
    <div class="col-sm-6 offset-sm-3">
        <ol>
            @foreach($questions as $question)
                <li>
                    <p class="mt-5">{{ $question->content }}</p>
                </li>
                    <div class="form-group">
                        {!! Form::open(['route' => 'answers.store']) !!}
                            {!! Form::text('content', old('content'),['class' => 'form-control']) !!}
                        {!! Form::close() !!}
                    </div>
            @endforeach
        </ol>
    </div>
    <div class="text-center">
        <div class="form-group">
            {!! Form::open(['route' => 'answers.store']) !!}
                {!! Form::submit('登録') !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
