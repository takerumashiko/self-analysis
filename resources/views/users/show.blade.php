@extends('layouts.app')

@section('content')
    <div class="row mr-0 ml-0">
        <aside class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2 text-center card-title ">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 350]) }}" alt="">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">いいね</li>
                </ul>
            </div>
        </aside>
        
        <div class="col-sm-9">
            
        </div>
    </div>
        
@endsection