  $(function() {
            $(".sortable tbody").sortable();
            $("#submit").on('click', function() {
                var listIds = $(".sortable tbody").sortable("toArray");
                $("#list-ids").val(listIds);
                $("form").submit();
            });
        });