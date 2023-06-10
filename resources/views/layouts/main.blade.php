<!doctype html>
<html lang="en">

<head>
    <title>
        @yield('titles')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-primary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> Profile
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <div class="media">
                                <img class="align-self-center mr-3" width="100" height="100"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8NdJym_JcKN2sPaQzr603q0VQIJfZDu57jOMQ8yoYeDRayMvCRvta4l5fwzZaGBzxTog&usqp=CAU">
                                <div class="media-body">
                                    <h5 class="mt-2">Welcome, {{ Auth::user()->nama ?? '' }} <i class=" bi bi-emoji-smile-upside-down"></i>
                                    </h5>
                                    <h6>Sistem Informasi</h6>
                                    <small>72210448</small> 
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item border-top" href="#"><i class="bi bi-gear-wide-connected"></i>
                            Settings</a>
                        <a class="dropdown-item border-top" href="/logout"><i class="bi bi-box-arrow-right"></i> Log
                            Out</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row vh-100">
            <div class="col-md-2 border">
                {{-- NAVIAGTION --}}
                @include('layouts/navigation')
            </div>
            <div class="col-md-10">
                {{-- KONTEN --}}
                @yield('content')
            </div>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
