<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ page_direction() }}">
<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="title" content="Welcome to LibreHealth EHR">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title') | {{ config('app.name', 'LibreHealth EHR') }}</title>

    <link rel="shortcut icon" type="image/x-icon"
          href="{{config('app.shortcut_icon') ?: asset('/images/icon/favicon.ico')}}">
    <meta name="description" content="{{config('app.description')}}">
    <meta name="keywords" content="{{config('app.keywords')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @notifyCss()
    @stack('css')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none flex flex-col ">

    @yield('content')
    @include('partials.footer')

    @include('notify::messages')
    @notifyJs()
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('js_scripts')
</body>
</html>
