<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- ante hobe --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap 5 Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            


            <div class="message"></div>
            
                <div class="container mt-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Student Table</h2>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Open modal
                        </button>

                    </div>

                        @include('table')
                </div>

            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>


    <!-- The Modal -->
    @include('entry')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('submit', '#studententry', function(e) {
                e.preventDefault();
                let Mydata = new FormData(this);
                console.log(Object.fromEntries(Mydata)); // for test
                // alert("hellow");

                $('.error_text').text('');

                $.ajax({
                    url:"{{route('student.store')}}",
                    method:'post',
                    data:Mydata,
                    processData: false,
                    contentType: false,
                    success:function(response){
                        $('#myModal').modal('hide');
                        // $('#studententry').reset();    form old data nile eita use kora jabe  
                        $('.message').html('<div class="alert alert-success message ">inserted</div>');

                    },
                    error:function(err){

                       let errors = err.responseJSON.errors;
                       $.each(errors, function(key,value){
                        $('.'+key + '_error').text(value[0]);
                       });
                    }
                });
                 
                
                // alert("hellow");

            })
        });


        // fetch students without page reloade 

        $.ajax
    </script>
</body>

</html>
