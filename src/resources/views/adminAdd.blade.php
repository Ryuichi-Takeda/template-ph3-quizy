<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>問題追加</div>
    <form action="./add" method="post">
        <table>
            @csrf
            <tr>
                <th>タイトル</th>
                <td><input type="text" name="prefecture" value="{{old('prefecture')}}"></td>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="send">
                </th>
            </tr>
        </table>
    </form>
    {{-- @foreach($prefectures as $prefecture) --}}
    {{-- <div>{{$prefecture->prefecture}}</div> --}}
    {{-- @endforeach --}}
    {{-- <div>{{$prefecture->getData()}}</div> --}}
    @if($msg ?? '' != '')
    <p>{{$msg ?? ''}}</p>
    @endif
</body>

</html>
