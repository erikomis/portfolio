<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://apis.google.com/js/platform.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="text-white dark:text-gray-2 ">
    <div class="min-h-screen bg-slate-100 dark:bg-slate-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
