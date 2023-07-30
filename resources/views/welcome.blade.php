<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Dyu</title>

        <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div>
            <h1 class="text-3xl font-bold bg-red-500 mx-auto text-center">Welcome to Dyu Publication</h1>
        </div>
    </body>
</html>
