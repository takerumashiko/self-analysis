@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-5 text-center">自己分析を行う</h1>
    <h2 class="mt-5 mb-5 text-center">質問数を選択してください！</h2>
    <div class="row mt-5 mr-0 ml-0 frame">
        
        <div class="col-md text-center">
            {!! link_to_route('questions.index','30問',[],['class' => 'btn btn-lg btn-success']) !!}
        </div>
        <div class="col-md text-center">
            {!! link_to_route('questions.index','50問',[],['class' => 'btn btn-lg btn-success']) !!}
        </div>
        <div class="col-md text-center">
            {!! link_to_route('questions.index','100問',[],['class' => 'btn btn-lg btn-success']) !!}
        </div>
    </div>
@endsection
