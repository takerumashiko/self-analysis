@extends('layouts.app')

@section('content')

    <h1 class="mt-4 text-center">自己分析を行う　{{ Auth::user()->question_number }}問</h1>
    <div class="col-sm-6 offset-sm-3">
        @foreach($questions ?? '' as $question)
            <p class="mt-5">{{ $question->id }}. {{ $question->content }}</p>
            <div class="form-group">
                {!! Form::open(['route' => 'answers.store']) !!}
                    {!! Form::text('content', old('content'),['class' => 'form-control']) !!}
                {!! Form::close() !!}
            </div>
        @endforeach
        
        <div class="mt-5">
            {{ $questions->links() }}
        </div>
    </div>
    
@endsection
