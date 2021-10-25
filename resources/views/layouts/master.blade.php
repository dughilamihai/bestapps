<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield ('meta')
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- Laravel MIX css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
    @livewireStyles
</head>

<body>
    @include ('layouts.navbar')
    <div class="container">
        @yield ('content')
        @include ('layouts.footer')
    </div>

    <!-- Laravel MIX js-->
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
