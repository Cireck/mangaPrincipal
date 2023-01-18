<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>How To Store Multiple Checkbox Value In Database Using Laravel - websolutionstuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">How To Store Multiple Checkbox Value In Database Using Laravel -
                            websolutionstuff.com</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <form id="form" method="get" action="{{ route('pruebaForm') }}}}">
                            @csrf
                            <div class="form-group">
                                <label><strong>Name :</strong></label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label><strong>Category :</strong></label><br>
                                <label><input type="checkbox" name="category[]" id="prueba1" value="Red">
                                    Red</label>
                                <label><input type="checkbox" name="category[]" id="prueba2" value="Blue">
                                    Blue</label>
                                <label><input type="checkbox" name="category[]" value="Green"> Green</label>
                                <label><input type="checkbox" name="category[]" value="Yellow"> Yellow</label>
                            </div>

                            <div class="form-group text-center">
                                <button id="pruebas11"type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="prueba11">shinano</div>
</body>
<script>
    $('#form').on('submit', function(e) {
        e.preventDefault()
        var form = $(this).serialize();
        var prueba = 'shinano1';
        console.log(form);
        $.ajax({
            url: "{{ route('pruebaForm') }}",
            type: "get",
            data: {
                prueba: prueba,
                form: form,
            },
            /* success: function(response) {
                 $('#submit').html('Submit');
                 $("#submit").attr("disabled", false);
                 alert('Ajax form has been submitted successfully');
                 document.getElementById("form").reset();

             }*/
            success: function(data) {
                $("#prueba11").html(data);
                console.log('yamato');
            },
        });
    })
</script>

</html>
