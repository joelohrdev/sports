<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Sports stats for the kids">
    <meta name="keywords" content="Baseball, Vollyball, Softball">
    <meta name="author" content="Joe Lohr">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sports Schedule</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased bg-gray-100">
{{--<x-header/>--}}
<div class="max-w-7xl mx-auto py-8 px-4 sm:py-8 sm:px-6 lg:px-8">
    @yield('content')
</div>
@livewireScripts
</body>
</html>
