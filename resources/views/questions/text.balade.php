<h1 class="mt-5 mb-5 text-center">自己分析を行う</h1>
<h2 class="mt-5 mb-5 text-center">質問数を選択してください！</h2>

    <div class="row mt-5 mr-0 ml-0">
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
    
    
    $questions30 = Question::where('class',30)->get();
    $questions50 = Question::whereIn('class',[30,50])->get();
    $questions100 = Question::whereIn('class',[30,50,100])->get();
        
    return view('questions.question',[
        'questions30' => $questions30,
        'questions50' => $questions50,
        'questions100' => $questions100
    ]);