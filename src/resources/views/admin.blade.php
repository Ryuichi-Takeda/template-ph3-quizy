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
    <form action="{{ route('admin.sortPrefecture') }}" method="post">
        <table class="sortable">


            @csrf
            @foreach ($prefectures as $prefecture)
                <tr id="{{ $prefecture->id }}">
                    <td>
                        <div>{{ $prefecture->id }}</div>
                    </td>
                    <td>
                        <div>{{ $prefecture->order_id }}</div>
                    </td>
                    <td><a 
                            href="{{ route('admin.showQuestion', ['id' => $prefecture->id]) }}">{{ $prefecture->prefecture }}</a>
                    </td>
                    <td><a href="{{ route('admin.edit', ['id' => $prefecture->id]) }}">変更</a></td>
                    <td><a href="{{ route('admin.delete', ['id' => $prefecture->id]) }}">削除</a></td>
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
