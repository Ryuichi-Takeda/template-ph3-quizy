<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>{{$prefecture[0]->prefecture}}</div>
    <table>
        
        @foreach($prefecture[0]->questions as $question)
        <tr>
            <td><img src="{{ asset('img/' . $question->img) }}" alt="" width="400px" height="300px"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>