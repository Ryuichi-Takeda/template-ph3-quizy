<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy</title>
    <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>

<body>
    <div class="main">
        <h1>{{ $prefecture[0]->prefecture }}の難読地名クイズ</h1>
        @foreach ($questions as $question)
        <div class="quiz">
                <h2>{{ $loop->index + 1 }}.この地名は何て読む？</h2>
                <img src="{{ asset('img/' . $question->img) }}" alt="">
                <ul>
                    @foreach ($question->choices as $choice)
                        <li id="{{ 'answer_list_' . $loop->parent->index . '_' . $loop->index }}" class="answer_list {{'answer_list_' . $loop->parent->index}}"
                            data-correct="{{$choice->valid}}">
                            {{ $choice->getData() }}</li>
                    @endforeach
                </ul>
                <li class="answerbox">
                    <span></span><br>
                    <span>正解は「」です！
                    </span>
                </li>
            </div>
            @endforeach
    </div>
    <script src="{{ asset('js/quizy.js') }}"></script>
</body>

</html>
