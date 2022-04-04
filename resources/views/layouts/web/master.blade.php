<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ahlam Mohammed">
    <meta name="keywords" content="Job , وظائف">
    <meta name="description" content="Your career starts here">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Css File --}}
    @include('layouts.web.style')
</head>
<body class="bg-light">

{{-- Navbar Section --}}
@include('layouts.web.navbar')

{{-- Slider Section --}}
@if(Request::is('/') || Request::is('home'))
    @include('layouts.web.slider')
@endif

<main>
    @yield('content')
</main>


{{-- Footer Section --}}
{{--@include('layouts.simple.footer')--}}

{{-- Script File --}}
@include('layouts.web.script')

</body>
</html>
