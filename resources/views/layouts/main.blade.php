<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>

    <body>
        <header class="text-center p-4 bg-dark text-white" style="font-size: 40px;">Select dinâmico com Ajax e jQuery</header>

        <div class="container mt-4">

            @yield('content')

        </div>
            
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
            
        <script>
            $(document).ready(function () {
                $('#sub_category, #subcategory').hide();
                $('#category').on('change', function () {
                    $('#sub_category, #subcategory').show(500);
                    let id = $(this).val();
                    $('#sub_category').empty();
                    $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                    $.ajax({
                        type: 'GET',
                        url: 'getSubCategories/' + id,
                        success: function (response) {
                            var response = JSON.parse(response);
                            console.log(response);   
                            $('#sub_category').empty();
                            $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                            response.forEach(element => {
                                $('#sub_category').append(`<option value="${element['id']}">${element['name']}</option>`);
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>