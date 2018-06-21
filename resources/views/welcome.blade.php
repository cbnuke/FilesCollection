<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Files Collection">
    <meta name="author" content="CBNUKE">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Files Collection') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prompt:100,400" rel="stylesheet">

    <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/logo.png')}}">

    <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
    <link rel="icon" href="{{asset('img/logo.png')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            line-height: 60px;
            /* Vertically center the text there */
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-1">
            <div class="container">
                <a class="navbar-brand" href="#">{{ config('app.name', 'Files Collection') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                    aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading"><i class="fas fa-folder-open"></i> Files Collection</h1>

                    <p class="lead text-muted">Power by
                        <a href="https://laravel.com/">Laravel</a>, Project repo by <a href="https://github.com/">GitHub</a>
                    </p>
                    <p>
                        <a href="https://github.com/cbnuke/FilesCollection" class="btn btn-primary my-2">Project Repository</a>
                        <a href="https://github.com/cbnuke/" class="btn btn-secondary my-2">Creator</a>
                    </p>
                </div>
            </section>

        </main>

    </div>

    <footer class="footer">
        <div class="container">
            <span class="float-right">
                <a href="#">Back to top</a>
            </span>
            <span class="text-muted">Album example is &copy; Bootstrap, but please download and customize it for yourself!</span>
        </div>
    </footer>
    {{--
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a> @endif
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <i class="fas fa-folder-open"></i> {{ config('app.name', 'Files Collection') }}
            </div>

            <div class="links">
                <a href="https://github.com/cbnuke/FilesCollection">GitHub</a>
                <a href="https://laravel.com/">Power by Laravel</a>
            </div>
        </div>
    </div> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>