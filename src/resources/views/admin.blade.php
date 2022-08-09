<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>都道府県</th>
            <th>問題</th>
            <th>問題</th>
            {{-- <th>選択肢</th> --}}
        </tr>

        {{-- {{dd($questions)}} --}}


        {{-- @foreach ($questions as $question) --}}
            <tr>
                <td>todouhuken</td>
                <td>
                    <table>
                        @foreach ($questions as $question)
                            <tr>
                                <td>{{$question->img}}</td>
                                <td>
                                    <table>
                                        @foreach ($question->choices as $choice)
                                            <tr>
                                                <td>{{ $choice->region }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        {{-- @endforeach --}}
    </table>
</body>

</html>
