<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>問題追加</div>
    <form action="{{route('admin.add.prefecture')}}" method="post">
        <table>
            @csrf
            <tr>
                <th>タイトル</th>
                <td><input type="text" name="prefecture" value="{{ old('prefecture') }}"></td>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="追加">
                </th>
            </tr>
        </table>
    </form>
    @if ($msg ?? '' != '')
        <p>{{ $msg ?? '' }}</p>
    @endif
</body>

</html>
