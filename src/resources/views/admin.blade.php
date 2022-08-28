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
    <form action="" action="post">
        <div class="sortable">
            @csrf
            @foreach ($prefectures as $prefecture)
                <table>
                    <tr>
                        <td>
                            <div>{{ $prefecture->order_id }}</div>
                        </td>
                        <td><a
                                href="{{ route('admin.showQuestion', ['id' => $prefecture->id]) }}">{{ $prefecture->prefecture }}</a>
                        </td>
                        <td><a href="{{ route('admin.edit', ['id' => $prefecture->id]) }}">変更</a></td>
                        <td><a href="{{ route('admin.delete', ['id' => $prefecture->id]) }}">削除</a></td>
                    </tr>
                </table>
            @endforeach
        </div>
        <input type="hidden" id="list-ids" name="list-ids" />
        <button id="submit">更新</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".sortable").sortable();
            $(".sortable").disableSelection();
            $("#submit").click(function() {
                var listIds = $(".sortable").sortable("toArray");
                $("#list-ids").val(listIds);
                $("form").submit();
            });
        });
    </script>
</body>

</html>
