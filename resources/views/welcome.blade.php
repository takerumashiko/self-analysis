@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @include('users.profile')
    @else
        <div class="container-fluid background-image">
            <div class="p-5 text-center">
                
                <h1 class="shadow">私の自己分析</h1>
                <p class="mt-5 lead height">
                    私の自己分析は、自分についての質問に答え、自己分析シートを作成するアプリです。<br>
                    自分の自己分析シートを作成したら、他のユーザーに見せることができたり、<br>
                    他のユーザーの自己分析シートを閲覧することもできます！
                </p>
                
                <h2 class="mt-5 mb-3 mark">まずは、アカウントを登録しましょう！！</h2>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-3 text-white lead">アカウントをお持ちでない方</p>
                        {!! link_to_route('signup.get','アカウント登録',[],['class' => 'btn btn-lg btn-success']) !!}
                    </div>
                    <div class="col-md">
                        <p class="mt-3 text-white lead">既にアカウントをお持ちの方</p>
                        {!! link_to_route('login','ログイン',[],['class' => 'btn btn-lg btn-success']) !!}
                    </div>
                </div>
                
                <h3 class="mt-5 font-weight-bold"><i class="far fa-star"></i>こんな方におすすめ！</h3>
                <div class="row mt-5">
                    <div class="col-md">
                        <h4 class="box">就活生</h4>
                    </div>
                    <div class="col-md"> 
                        <h4 class="box">人生の軸を見つけたい方</h4>
                    </div>
                    <div class="col-md">
                        <h4 class="box">やりたい事が見つからない方</h4>
                    </div>
                    
                </div>
            </div>
        </div>
    @endif
@endsection
