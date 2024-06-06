<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js ,resources/css/app.css'])
</head>
<body  >
<div class="flex flex-col ">
    <x-general.header/>
        <main  class="pt-10 flex-initial">
            @yield('content')
        </main>
        <x-general.footer />
</div>
</body>
</html>
