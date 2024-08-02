
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/gridviewStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/list_style/style.css')}}">
{{--     <style>
        .error{
            font-size: small;
        }
        .nav{
            position:sticky;
            top: 10%;
        }
    </style> --}}

    @stack('css')

</head>
<body>
    <!-- header -->
    @include("employer/layout/includes/header")
    <!-- side -->
    @include("employer/layout/includes/menu")

    <!-- center -->
    @yield('content')
    <!-- End center -->
    
</body>
</html>