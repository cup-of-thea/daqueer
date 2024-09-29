<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.webp') }}">

    <title>{{ isset($title) ? $title . " | " : "" }}{{ config("app.name") }}</title>

    @vite('resources/css/app.css')
</head>
<body class="mx-auto max-w-7xl p-6 lg:px-8 bg-main">
<livewire:navigation/>
{{ $slot }}
</body>
</html>
