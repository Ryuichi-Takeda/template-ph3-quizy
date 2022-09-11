<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>{{$prefecture[0]->prefecture}}</div>
    <table>
        {{-- {{dd($prefecture)}} --}}
        <a href="{{ asset('admin/question/add/' . $prefecture_id) }}">追加</a>
        @foreach($prefecture[0]->questions as $question)
        <tr>
            <td><a href="{{ asset('admin/choice/' . $prefecture_id . '/' . $question->id) }}"  width="400px" height="300px"><img src="{{ asset('img/' . $question->img) }}" alt=""  width="100%" height="100%"></a></td>
            <td><a href="{{ asset('admin/question/edit/' . $prefecture_id . '/' . $question->id)}}">変更</a></td>
            <td><a href="{{ asset('admin/question/delete/' . $prefecture_id . '/' . $question->id)}}">削除</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>