<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "UnKnown Page")</title>
    <link rel="stylesheet" href="{{asset('css/list_style/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/listing_job_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/filter_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/footer_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/header_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stand.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/style/css.css')}}"> --}}

    @yield('css')
    {{-- @vite(["resources/sass/app.scss", "resources/js/app.js"]) --}}
</head>
<body>
    {{-- Begin: Header --}}
    @include('layout.includes.header')
    {{-- End: Header --}}

    {{-- Begin: Navigation Bar --}}
    {{-- @include('layout.navbar') --}}
    {{-- End: Navigation Bar --}}

    @yield('content')

    {{-- @section('sidebar')
        This is sidebar From Master
    @show --}}

    {{-- Begin: Side Bar --}}
    {{-- @include('layout.sidebar') --}}
    {{-- End: Side Bar --}}

        {{-- Begin: Footer --}}
        @include('layout.includes.footer')
        {{-- End: Footer --}}


    
</body>
</html>