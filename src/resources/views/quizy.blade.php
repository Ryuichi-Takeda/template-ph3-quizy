<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy</title>
    <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>

<body>
    <div class="main">
        <div class="quiz">
            <h1>{{ $prefecture[0]->prefecture }}の難読地名クイズ</h1>
            @foreach ($questions as $question)
                <h2>{{ $loop->index + 1 }}.この地名は何て読む？</h2>
                <img src="{{ asset('img/' . $question->img) }}" alt="">
                <ul>
                    @foreach ($question->choices as $choice)
                        <li id="{{ 'answerlist_' . $loop->parent->index . '_' . $loop->index }}" class="answerlist">
                            {{ $choice->getData() }}</li>
                    @endforeach
                </ul>
                <li class="answerbox">
                    <span></span><br>
                    <span>正解は「」です！
                    </span>
                </li>
            @endforeach
        </div>
    </div>
</body>
</html>
