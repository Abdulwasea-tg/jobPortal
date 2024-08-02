<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/list_style/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/listing_job_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/filter_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/footer_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_style/header_style.css')}}">

    @yield('css')
  
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
<body class="surface">
  <!-- =====================| HEADER BEGIN |================== -->
  @include("seeker/layout/includes/header")
  <!-- =====================| MAIN BEGIN |================== -->
  @yield('content')
 
  <!-- =====================| MAIN END |================== -->
  <!-- =====================| FOOTER BEGIN |================== -->
  @include("seeker/layout/includes/footer")
  <!-- =====================| FOOTER END |================== -->

    
</body>
</html>