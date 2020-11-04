@extends('layouts.app')

@section('content')
    <div class="mt-5 text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="mt-5">
                    {!! Form::submit('ログイン', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                </div>
                
            {!! Form::close() !!}
            
            <p class="mt-2">新しいアカウントを登録しますか？{!! link_to_route('signup.get', 'アカウントを登録する') !!}</p>
        </div>
    </div>
@endsection