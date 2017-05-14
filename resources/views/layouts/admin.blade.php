<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
        #app
        {
            display: flex;
            flex-flow: row wrap;
        }
        .navbar
        {
            width: 100%;
        }
        .admin-nav
        {
            width: 16%;
            margin-left: 1em;
        }
    </style>
</head>
<body>
<div id="app">
    @include('partials.header')
    @yield('nav')
    <div class="container-fluid" style="width: 80%">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
