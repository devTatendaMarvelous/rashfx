<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    
    <link href="{{ asset('css/dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public/assets/css/authentication/form-2.css') }}" rel="stylesheet">
    <link href="{{asset('css/dashboard/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
     
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="/css/public/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/css/public/bootstrap/js/popper.min.js"></script>
    <script src="/css/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/css/public/assets/js/authentication/form-2.js"></script>
</body>
</html>
