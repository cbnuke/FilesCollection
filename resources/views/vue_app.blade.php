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
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
