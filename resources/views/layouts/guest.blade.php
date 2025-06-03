<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSS LINK -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- FONTS LINK -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Scripts -->
    </head>
    <body class="font-sans">

        @include("components.background-styling")

        <div class="login-page-container">
                <div class="loging-form-container
                @if (request()->routeIs('login')) login-size-login
                @elseif (request()->routeIs('register')) login-size-register
                @endif">

                    @if (request()->routeIs('login'))
                        <h1 class="loginpage-title">Aanmelden</h1>
                    @elseif (request()->routeIs('register'))
                        <h1 class="loginpage-title">Registreren</h1>
                    @endif

                    {{ $slot }}
                </div>
        </div>
    </body>
</html>
