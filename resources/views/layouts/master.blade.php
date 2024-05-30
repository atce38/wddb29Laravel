
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creating Route, Controller, Views</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    {{-- NAVBAR START --}}
    <nav class="navbar navbar-expand-sm bg-black navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Abiding Tech Computer Education</a>

            <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse"> <span class="navbar-toggler-icon"></span> </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Courses</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Web</a></li>
                            <li><a class="dropdown-item" href="#">Mobile</a></li>
                            <li><a class="dropdown-item" href="#">Desktop</a></li>
                            <li><a class="dropdown-item" href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">About US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact US</a></li>
                </ul>
                <div class="d-flex">
                    <input type="text" class="form-control">
                    <input type="submit" value="search" class="btn btn-outline-success">

                </div>

            </div>
        </div>
    </nav>
    {{-- NAVBAR END --}}

    {{-- CONTENT START --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- CONTENT END --}}
    <footer class="text-bg-warning">
        <h1>This is Footer</h1>
    </footer>
</body>
</html>
