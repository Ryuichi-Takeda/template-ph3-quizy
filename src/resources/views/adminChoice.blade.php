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
            <a href=" {{ route('admin.show.question', ['prefecture_id' => $prefecture_id]) }}">設問に戻る</a><br>
            @foreach ($prefecture->questions as $question)
                @foreach ($question->choices->where('question_id', $question_id) as $choice)
                    <tr>
                        <td><input type="text" name="choice{{ $loop->index }}" value="{{ $choice->region }}"></td>
                        <td>
                            <input type="radio" name="valid" value="{{ $loop->index }}"
                                @if ($choice->valid == 1) checked @endif>
                        </td>
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
