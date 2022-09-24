<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>設問編集</div>
        <img src="{{ asset('img/' . $question->img) }}" alt="" width="300px" height="200px">
        <form action="{{route('admin.update.question',['prefecture_id'=>$prefecture_id,'question_id'=>$question_id])}}" method="post" enctype="multipart/form-data">
            <table>
                @csrf
                <input type="file" name="img" accept="image/*">
                <tr>
                    <th>
                        <input type="submit" value="変更">
                    </th>
                </tr>
            </table>
        </form>
</body>
</html>
