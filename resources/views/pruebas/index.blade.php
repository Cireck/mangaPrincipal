<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Image Upload Using Ajax Example with Coding Driver</title>
    @include('layouts.layoutCss')
    @include('layouts.layoutJs')

</head>

<body>
    <br />
    <div class="container">
        <h3 align="center">Laravel Pagination using Ajax</h3><br />
        <div id="table_data">
            @include('pruebas.pagination_data')
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/pagination/fetch_data?page=" + page,
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }

    });
</script>
