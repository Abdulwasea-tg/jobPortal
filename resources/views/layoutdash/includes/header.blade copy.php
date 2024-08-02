<header>
    <!-- =====================| SLIDE SECTION BEGIN |================== -->
    <section class="header surface-container">
      <div class="content">
        <!-- logo box -->
        <article class="logo">
          <div class="container">
            <!-- list box -->
            <ul class="list-box">          
              <li class="list-item">
                <a href="#"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Job Finder" ></a>
              </li>
            </ul>
          </div>
        </article>
        <!-- top-nav box -->
        <article class="top-nav">
          <div class="container">
            <!-- list box -->
            <ul class="list-box">  
              <li class="list-item">
                <!-- list image -->
                <!-- list body -->
                <nav class="list-item-body">
                  <ul class="support-text-list">
                      <li><a class="on-surface-container" href="{{route('home')}}"> Go to Website</a></li>
                      {{-- <li><a class="on-surface-container" href="{{route('employer_Dashboard')}}"> Employer</a></li>
                      <li><a class="on-surface-container" href="{{route('seeker_Dashboard')}}"> Seeker</a></li>
                      <li><a class="on-surface-container" href="{{route('seeker.jobs.list')}}"> Jobs</a></li>
                      <li><a class="on-surface-container" href="Home.html"> News</a></li>
                      <li><a class="on-surface-container" href="javascript:void(0)"> Page</a></li>
                      <li><a class="on-surface-container" href="about.html"> About</a></li>
                      <li><a class="on-surface-container" href="contact.html"> Contact</a></li> --}}
                  </ul>
<!--                       <div id="droplist" class="side_nav_box surface-container">
                    <a href="javascript:void(0)" class="closebtn on-surface-container" onclick="closeNav()">&times;</a>
                      <ul>
                          <li><a class="on-surface-container" href="home.html"> Home</a></li>
                          <li><a class="on-surface-container" href="Home.html"> Employer</a></li>
                          <li><a class="on-surface-container" href="Home.html"> Job Seeker</a></li>
                          <li><a class="on-surface-container" href="Home.html"> News</a></li>
                      </ul>
                  </div> -->
               </nav>
              </li>
            </ul>
          </div>
        </article>
        <!-- top-nav box end -->
        <!-- Register and login-nav btn box begin -->
        <article class="autho-btn">
          <div class="container">
            <!-- list box -->
            <ul class="list-box surface-container-low">          
              <li class="list-item">
                <div class="list-item-body">
                  <ul class="list-trailing outline">
                      <li><a href=""><button  type="button" class="btn-outlin">Logout</button></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          
        </article>
        <!-- Register / login nav btn box end -->
        <!-- side-nav box begin-->
        <article class="sid-nav">
          <div class="container">
            <!-- list box -->
            <ul class="list-box">          
              <li class="list-item">
                <div class="list-item-body">
                  <button style="font-size: 30px; cursor: pointer;" onclick="openNav()">&#9776; <!-- <img src="filter128.png" alt=""> --></button>
                  <div id="mySidenav" class="side_nav_box surface-container">
                    <a href="javascript:void(0)" class="closebtn on-surface-container" onclick="closeNav()">&times;</a>
                      <ul>
                          <li><a class="on-surface-container" href="home.html"> Home</a></li>
                          <li><a class="on-surface-container" href="{{route('employer_Dashboard')}}"> Employer</a></li>
                          <li><a class="on-surface-container" href="{{route('seeker_Dashboard')}}"> Seeker</a></li>
                          <li><a class="on-surface-container" href="{{route('seeker.jobs.list')}}"> Jobs</a></li>
                          <li><a class="on-surface-container" href="Home.html"> News</a></li>
                          <li><a class="on-surface-container" href="Home.html"> Page</a></li>
                          <li><a class="on-surface-container" href="about.html"> About</a></li>
                          <li><a class="on-surface-container" href="contact.html"> Contact</a></li>
                      </ul>
                  </div>

                </div>
              </li>
            </ul>
          </div>
        </article>
        <!-- side-nav box end-->
      </div>
    </section>
    <!-- =====================| SLIDE SECTION END |================== -->

</header>
<!-- =====================| HEADER END |================== -->