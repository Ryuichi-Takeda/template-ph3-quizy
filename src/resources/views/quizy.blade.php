<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>
<body>
    {{-- <div>{{dd($choices_array)}}</div> --}}
    <h1>{{$prefecture_name[0]->prefecture}}の難読地名クイズ</h1>
    @foreach ($choices_array as $choices)
    <h2>{{$loop->index+1}}.この地名は何て読む？</h2>
    @foreach ($choices_array as $choice)
    <li id=`choice_{{$choice->questionId}}_{{$loop->index+1}}` data-valid={{$choice->valid}}>
        {{$choice->region}}
    </li>
    @endforeach
    @endforeach
</body>
</html>