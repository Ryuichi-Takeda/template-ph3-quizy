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
    <form action="" method="post">
        <table>
            @csrf
            <a href="{{ asset('admin/question/add/' . $prefecture_id) }}">追加</a>
            @foreach ($prefecture[0]->questions as $question)
                @foreach ($question->choices->where('question_id', $question_id) as $choice)
                    <tr>
                        <td><input type="text" name="" value="{{ $choice->region }}"></td>
                    </tr>
                @endforeach
            @endforeach
            <tr>
                <th>
                    <input type="submit" value="変更">
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
