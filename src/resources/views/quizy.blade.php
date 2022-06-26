<!DOCTYPE html>
<html lang="ja">a
<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
    <h1>{{$prefecture_name[0]->prefecture}}の難読地名クイズ</h1>
    @foreach ($choices_array as $choices)
    <h2>{{$loop->index+1}}.この地名は何て読む？</h2>
    @foreach ($choices as $choice)
    <li>
        {{$choice->region}}
    </li>
    @endforeach
    @endforeach
</body>
</html>