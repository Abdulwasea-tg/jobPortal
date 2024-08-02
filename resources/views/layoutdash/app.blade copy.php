
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/gridviewStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css2.css')}}">

    <link rel="stylesheet" href="{{asset('css/list_style/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/listing_job_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/filter_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/footer_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/header_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stand.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/sidenave.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
{{--     <style>
        .error{
            font-size: small;
        }
        .nav{
            position:sticky;
            top: 10%;
        }
    </style> --}}
    <style>
        aside, menu, .artical{
            height: 100%;
        }
        .content{
            padding: 0px,0px;
            margin: 0px;
        }
        main{
            padding: 0px
        }
    </style>


    @stack('css')

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav(){
          document.getElementById("mySidenav").style.width="250px";
        }
        function closeNav(){
          document.getElementById("mySidenav").style.width="0";
        }
      </script>

</head>
<body>
    @include("seeker/layout/includes/header")
    <main>
        <section class="listing-job surface-container-highest">
            <div class="content surface-container-high">
                @include("seeker/layout/includes/menu")
                <article class="">
                    {{-- (1)-JOB OVERVIEW BEGIN --}}
                    <div class="container  surface-container-low">
                                  <!-- list box -->
                        <ul class="list-box surface-container-low">
                            <!-- List header -->
                            <li class="list-item list-head">
                                <!-- list body -->
                                <div class="list-item-body">
                                    @yield('title')
                                </div>
                                <!-- list trailing -->
                            </li>
                            <li class="list-item list-head">
                                <!-- list body -->
                                @yield('content')
                                </div>
                                <!-- list trailing -->
                            </li>
                        </ul>
                        {{-- @yield('title') --}}

                    </div> 
                    {{-- (1)-JOB OVERVIEW END --}}
                    {{-- (2)-JOB COMPANY INFO BEGIN --}}
                    {{-- <div class="container  surface-container-low">
                        @yield('content')
                    </div>  --}}
                    {{-- (2)-JOB COMPANY INFO END --}}   
                </article>
            </div>
        </section>
        <!-- header -->
        {{-- @include("employer/layout/includes/header") --}}
    
        <!-- side -->

    </main>



    @yield('scripts')
</body>
</html>