<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/style.css') }}" rel="stylesheet">
</head>
<body id="site-body">
    <header>
        <div class="header-top">
         <h3>Mohamed Yousef Blog</h3>
        </div>
    </header>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
   
</body>
</html>
