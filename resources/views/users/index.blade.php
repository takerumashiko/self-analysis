@extends('layouts.app')

@section('content')
    @if(count($users) > 0)
        <ul class="list-inline-item">
            @foreach($users as $user)
                <li class="media">
                    <div class="media-top">
                        <img class="mt-3 mr-3 rounded" src="{{ Gravatar::get($user->email, ['size' => 150]) }}" alt="">
                    </div>
                    <div class="media-body">
                        <div class="mt-4">
                            {{ $user->name }}さん
                        </div>
                        <div>
                            {{ $user->age }}歳
                            {{ $user->gender }}
                        </div>
                        <div>
                            <p>{!! link_to_route('users.show','プロフィールを見る',['user' => $user->id]) !!}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        
        {{ $users->links() }}
        
    @endif
@endsection
