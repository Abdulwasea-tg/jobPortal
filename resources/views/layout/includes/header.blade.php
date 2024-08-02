<header>
    <!-- =====================| SLIDE SECTION BEGIN |================== -->
    <section class="header surface-container on-surface-container">
      <div class="content">
        <!-- logo box -->
        <article class="logo">
          <div class="container">
            <!-- list box -->
            <ul class="list-box">          
              <li class="list-item">
                <a href="#"><img class="logo" src="{{asset('assets/img/logo/logo.png')}}" alt="Job Finder" ></a>
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
                  @include('layout.includes.navbar')

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

                                      <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                      <a href="{{route('auth.login')}}"><button type="button" class="btn-outlin">Login</button></a>
                        {{-- <a class="nav-link" href="{{ route('login2') }}">{{ __('Login') }}</a> --}}
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                      <a href="{{route('seeker.register')}}"><button type="button" class="btn-primary on-primary"  id="btn_sign">{{ __('Register') }}</button></a>
                        {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                        
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
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