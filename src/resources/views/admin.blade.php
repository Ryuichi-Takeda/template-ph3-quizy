<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('admin.add') }}">追加</a>
    <table>
        @foreach ($prefectures as $prefecture)
            <tr>
                <td>{{ $prefecture->prefecture }}</td>
                <td><a href="{{ asset('admin/edit/' . $prefecture->id) }}">変更</a></td>
                <td><a href="{{ asset('admin/delete/' . $prefecture->id) }}">削除</a></td>
            </tr>
        @endforeach
    </table>
    </div>
</body>

</html>
