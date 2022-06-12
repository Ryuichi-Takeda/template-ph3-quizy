<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>

<body>
    <h1>{{$prefecture_name[$prefecture_id-1]}}の難読地名クイズ</h1>
    @for($j = 0; $j < COUNT($choices[$prefecture_id-1]); $j++)
    <div>
        <h2>{{$j+1}}.この地名は何て読む？</h2>
    </div>
    @for ($i = 0; $i < COUNT($choices[$prefecture_id-1][$j]); $i++)
<li>{{ $choices[$prefecture_id-1][$j][$i] }}</li>
@endfor
@endfor
</body>
</html>