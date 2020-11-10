@extends('layouts.app')

@section('content')
    <div class="row mr-0 ml-0">
        <aside class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2 text-center card-title ">{{ Auth::user()->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 300]) }}" alt="">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">いいね</li>
                    <li class="list-group-item lead">自己分析を行う</li>
                    <li class="list-group-item lead">他ユーザーの自己分析を見る</li>
                </ul>
            </div>
        </aside>
        
        <div class="col-sm-9">
            <h3 class="mt-3 mb-3 text-center">{{ Auth::user()->name }}さんの自己分析</h3>
            {{-- 質問一覧 --}}
            <table class="table table-borderd">
                <thead>
                    <tr>
                        <th class="text-center">質問</th>
                        <th class="text-center">回答</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </table>
        </div>
        
    </div>
        
@endsection

