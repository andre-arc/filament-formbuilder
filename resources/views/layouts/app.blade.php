<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <style>[x-cloak] { display: none !important; }</style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

    </head>

    <body class="antialiased">
        @livewire('form-upload')

        <script src="{{asset('js/app.js')}}"></script>
        @livewireScripts
        @stack('scripts')
        @livewire('notifications')
    </body>
</html>
