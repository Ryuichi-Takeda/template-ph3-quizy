<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>設問追加</div>
    <form action="{{route('admin.add.question',$prefecture_id)}}" method="post" enctype="multipart/form-data">
        <table>
            @csrf
            <input type="file" name="img" accept="image/*">
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