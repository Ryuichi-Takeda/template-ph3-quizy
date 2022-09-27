<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>{{ $prefecture->prefecture }}</div>
    <form action="{{ route('admin.sort.question') }}" method="post">
        <table class="sortable">
            <a href="{{ route('admin.add.question', ['prefecture_id' => $prefecture_id]) }}">追加</a>
            @csrf
            @foreach ($prefecture->questions as $question)
                <tr id="{{ $question->id }}">
                    <td>
                        <div>{{ $question->id }}</div>
                    </td>
                    <td>
                        <div>{{ $question->order_id }}</div>
                    </td>
                    <td width="300px" height="200px">
                        <a href="{{ asset('admin/choice/' . $prefecture_id . '/' . $question->id) }}" width="300px"
                            height="200px">
                            <img src="{{ asset('img/' . $question->img) }}" alt="" width="100%"
                                height="100%">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('admin/question/edit/' . $prefecture_id . '/' . $question->id) }}">変更</a>
                    </td>
                    <td>
                        <a href="{{ asset('admin/question/delete/' . $prefecture_id . '/' . $question->id) }}">削除</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <input type="hidden" id="list-ids" name="listIds" />
        <button id="submit">更新</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".sortable tbody").sortable();
            $("#submit").on('click', function() {
                var listIds = $(".sortable tbody").sortable("toArray");
                $("#list-ids").val(listIds);
                $("form").submit();
            });
        });
    </script>
</body>

</html>
