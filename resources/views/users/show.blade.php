@extends('layouts.app')

@section('content')
    <div class="row mr-0 ml-0">
        <aside class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2 text-center card-title ">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 300]) }}" alt="">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">いいね</li>
                </ul>
            </div>
        </aside>
        
        <div class="col-sm-9">
            <h3 class="mt-3 mb-3 text-center">{{ $user->name }}さんの自己分析　{{ $user->question_number }}問</h3>
            <ol>
                @foreach($questions as $question)
                    <li>
                        <p class="mt-5">{{ $question->content }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
        
    </div>
        
@endsection