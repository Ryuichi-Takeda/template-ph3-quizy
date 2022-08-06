<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>
<body>
    <a href="{{ asset('quizy/1') }}">東京</a>
    {{-- <div>{{dd($choices_array)}}</div> --}}

    <table>


        <tr><th>a</th><th>b</th></tr>
        @foreach($prefectures as $question)
        <tr>
            <td>{{$question->getData}}</td>
            {{-- {{dd($question)}} --}}
            {{-- <td>@foreach($question->question as $obj)
            <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
        </td> --}}
        </tr>
        @endforeach
    </table>

    {{-- <h1>{{$prefecture_name[0]->prefecture}}の難読地名クイズ</h1>
    @foreach ($choices_array as $choices)
    <h2>{{$loop->index+1}}.この地名は何て読む？</h2>
    @foreach ($choices_array as $choice)
    <li id=`choice_{{$choice->question_id}}_{{$loop->index+1}}` data-valid={{$choice->valid}}>
        {{$choice->region}}
    </li>
    @endforeach
    @endforeach --}}

</body>
</html>