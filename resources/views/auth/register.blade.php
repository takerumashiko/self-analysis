@extends('layouts.app')

@section('content')
    <div class="mt-5 text-center">
        <h1>アカウント登録</h1>
    </div>
    
    <div class="row mr-0 ml-0">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'),['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('gender', '性別') !!}<br>
                    {!! Form::radio('gender','男性') !!}
                    男性
                    {!! Form::radio('gender','女性') !!}
                    女性
                </div>
                
                <div class="form-group">
                    {!! Form::label('age', '年齢') !!}<br>
                    {!! Form::selectRange('age',0,100, old('age'),['class' => 'field']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('question_number', '自己分析の質問数') !!}<br>
                    {!! Form::radio('question_number',30) !!}
                    30問
                    {!! Form::radio('question_number',50) !!}
                    50問
                    {!! Form::radio('question_number',100) !!}
                    100問
                </div>
                
                <div class="form-group">
                    {!! Form::label('is_private', '自己分析を非公開にする') !!}<br>
                    {!! Form::radio('is_private',0) !!}
                    はい
                    {!! Form::radio('is_private',1,true) !!}
                    いいえ
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード (8文字以上)') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', '確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="mt-5 mb-5">
                    {!! Form::submit('アカウント登録', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                </div>
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection 
