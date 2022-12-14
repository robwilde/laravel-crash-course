<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posty</title>
</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li><a href="" class="p-3">home</a></li>
        <li><a href="" class="p-3">dashboard</a></li>
        <li><a href="" class="p-3">post</a></li>
    </ul>

    <ul class="flex items-center">
        <li><a href="" class="p-3">Robert Wilde</a></li>
        <li><a href="" class="p-3">Login</a></li>
        <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
        <li><a href="" class="p-3">Logout</a></li>
    </ul>
</nav>
@yield('content')
</body>
</html>
