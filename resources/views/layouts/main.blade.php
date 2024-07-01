<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/logo.png') }}">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('layouts.nav')
    <div class="main">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
