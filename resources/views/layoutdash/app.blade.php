
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document', 'Unknown')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/gridviewStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css2.css')}}">

    <link rel="stylesheet" href="{{asset('css/list_style/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/listing_job_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/filter_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/main.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/list_style/footer_style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/list_style/header_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stand.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/sidenav.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
{{--     <style>
        .error{
            font-size: small;s
        }
        .nav{
            position:sticky;
            top: 10%;
        }
    </style> --}}
    <style>
        main .content{
            padding: 0px,0px;
            margin: 0px;
            height:100%;
            /* max-height: 1000px; */
            
            /* overflow: scroll; */
        }
        main{
            padding: 0px
        }
        ul{
            list-style: none;
        }
        /* .content div{
            position: relative;
        } */
        nav{
            width: 256px;
            height: 80%;
            position: fixed;
            top: 120px;
            overflow-x: hidden;
        }
        .main{
            margin-left: 280px
        }
        @media only screen and (max-width: 991.88px){/* wrapper = ; margin:auto */
            .content{
                padding:20px 16px; 
            }
            nav{width: auto;}
            .main{margin-left: 130px}
            nav li button{
                flex-flow: column nowrap;
                padding: 0px;
            }
            .btn_tab{
                display: flex;
                flex-flow: column nowrap;
                justify-content: center;
                align-items: center;
                padding-left: 10px;
                text-align: center;
                padding: 5px;

            }
            nav a img{
                width: 32px;
                height: 32px;
                padding: 5px;
                background-color: #6650a41a;
                border: none;
                border-radius: 8px;
                align-self:center;
                margin: 0px;
            }

        }
        @media only screen and (min-width: 768px){/* wrapper  = max-width:720; margin:auto */
            .side_nav_box{display: none;position: absolute;visibility: hidden;}
            #btnmenu{display: none;}
        }
        /* wrapper  = max-width:540; margin:auto */
        @media only screen and (max-width: 767.98px){/* wrapper  = max-width:540; margin:auto */
            .content.main>*, .main, .main>*{
                width: auto;
                flex: auto;
            }
            
            nav .icon-nav{display:none;}
            #sidenav{
                /* visibility: visible; */
                width: 0px;
                padding: 0px;
                border-width: 0px;
            }
            .main{margin-left: 0px; flex: 100%;}
        }
                /* wrapper  = max-height: 520px; margin:auto */
        @media only screen and (max-height: 520px){/* wrapper  = max-height: 520px; margin:auto */
            nav{padding: 0px;}
            .btn_tab img{
                width: 52px;
                height: 52px;
                padding: 8px;
            }
        }
    </style>


    @stack('css')

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav(){
          document.getElementById("sidenav").style.width="250px";
          document.getElementById("sidenav").style.padding="0";
          document.getElementById("sidenav").style.borderWidth="1";
        }
        function closeNav(){
          document.getElementById("sidenav").style.width="0";
          document.getElementById("sidenav").style.padding="0";
          document.getElementById("sidenav").style.borderWidth="0";
        }
      </script>

</head>
<body class="surface-container-high">
    @include("layoutdash/includes/header")
    <main>
        <section class="listing-job">
            <div class="pi0 content surface-container-high">
                <div class=" wrapper d-flx-r jc-st flx1 g16 ">
                    {{-- nav begain --}}
                    <button id="btnmenu" style="font-size: 30px; cursor: pointer;position:absolute;top:80px;" onclick="openNav()">&#9776; <!-- <img src="filter128.png" alt=""> --></button>
                    <nav id="sidenav" class="side-nav pi8 surface-container outline-border-r  outline-variant">
                        
                        {{-- @include("layoutdash/includes/menu") --}}
                        @section('sidenav')
                            this is side nave from parent to overwrit
                        @show
                    </nav>
                    {{-- nav end --}}
                    {{-- main begain --}}
                    <div class="main d-flx-cnw jc-s g16 flx2 p16 surface-container outline-border-r  outline-variant">
                        <div class="pi16 on-surface">
                            @yield('title')
                        </div>

                        <div class="d-flx-r jc-e">
                            @yield('action')
                        </div>

                        <div class="pi16 surface-container-high  outline-border-r outline-variant">
                            @yield('content')
                        </div>  
                    </div>
                    {{-- center end --}}
                </div>
            </div>
        </section>
    </main>
    @yield('scripts')
</body>
</html>