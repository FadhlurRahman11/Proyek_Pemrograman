<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/logo.png') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Dashboard</title>
</head>
<body>
    @include('sweetalert::alert')
    @include('dashboard.template.nav')

    @include('dashboard.template.sidebar')
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>
</body>
</html>
