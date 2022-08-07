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
        <h1>{{$prefecture[0]->prefecture}}の難読地名クイズ</h1>
        @foreach($questions as $question)
        <h2>{{$loop->index+1}}.この地名は何て読む？</h2>
        <img src="{{ asset('img/' . $question->img) }}" alt="">
        @foreach($question->choices as $choice)
        <li class="answerlist">{{$choice->getData()}}</li>
        @endforeach
        @endforeach
    </div>
    </div>





        {{-- <tr><th>a</th><th>b</th></tr>
        @foreach($questions as $question)
        <tr>
            <img src="{{ asset('img/' . $question->img) }}" alt="">
            <td>{{$question->getData()}}</td>
            <td>@foreach($question->choices as $choice)
            <tr><td>{{$choice->getData()}}</td></tr>
            @endforeach
        </td>
        </tr>
        @endforeach
    </table> --}}

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