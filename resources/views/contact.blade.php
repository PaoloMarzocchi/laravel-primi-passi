<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <div>💻</div>
            <div>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}" aria-current="page">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact me</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <div class="container-fluid pt-5">
        <h1 class="text-center">Contact me</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Lorem,</li>
            <li class="list-group-item">Ipsum</li>
            <li class="list-group-item">Dolor.</li>
        </ul>

    </div>


</body>

</html>