<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @yield('stylesheets')
        <title>Ma fiche de révision - @yield('title')</title>
    </head>
    
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        @yield('javascripts')
    </body>
</html>