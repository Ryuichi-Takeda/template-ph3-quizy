<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>選択肢</div>
    <table>
        <a href="{{ asset('admin/question/add/' . $prefecture_id) }}">追加</a>
        @foreach ($prefecture[0]->questions as $question)
            @foreach ($question->choices->where('question_id', $question_id) as $choice)
                <tr>
                    <td>{{ $choice->region }}</td>
                </tr>
            @endforeach
        @endforeach
</body>

</html>
