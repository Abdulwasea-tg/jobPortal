{{-- 
<div class="nav">
    <ul>
        <li><a href="{{ route('seeker.jobs.list')}}"><button id="tab_4" class="btn_tab" href=""><img src="{{asset('Resorce/search.png')}}" alt="noimg"></img>Search Job</button></a></li>
        <li><a href="{{ route('seeker_Dashboard')}}"><button id="tab_1" class="btn_tab" href=""><img src="{{ asset('Resorce/home.png')}}" alt="noimg"></img>Home</button></a></li>
        <li><a href="{{ route('seeker.profile.index')}}"><button id="tab_2" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Profile</button></a></li>
        <li><a href="{{ route('seeker.education.index')}}"><button id="tab_3" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Education</button></a></li>

        <li><a href="{{ route('seeker.applicaions')}}"><button id="tab_5" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Job Status</button></a></li>
        <li><a href="Walkin.php"><button id="tab_6" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Walkin Interview</button></a></li>
        <li><a href="{{ route('seeker.feedbck.create')}}"><button id="tab_7" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Feedback</button></a></li>

    </ul>  
    </div>;
 --}}
  <ul class="surface-container icon-nav">
    <li class="secondary-container on-secondary-container outline-border-r  outline-variant"><a href="{{ route('seeker.jobs.list')}}"><button id="tab_4" class="btn_tab btn-secondary" href=""><img src="{{asset('Resorce/search.png')}}" alt="noimg"></img>Search Job</button></a></li>
    <li><a href="{{ route('seeker_Dashboard')}}"><button  id="tab_1" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('Resorce/home.png')}}" alt="noimg"></img>Home</button></a></li>
    <li><a href="{{ route('seeker.profile.index')}}"><button id="tab_2" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Profile</button></a></li>
    <li><a href="{{ route('seeker.education.index')}}"><button id="tab_3" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Education</button></a></li>
    <li><a href="{{ route('seeker.resume.index')}}"><button id="tab_4" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('assets/img/job seeker/application.png')}}" alt="noimg"></img>Resumes</button></a></li>

    <li><a href="{{ route('seeker.applicaions')}}"><button id="tab_5" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Job Status</button></a></li>
    <li><a href="{{ route('seeker.feedbck.create')}}"><button id="tab_7" class="btn_tab btn-secondary d-flx flx1" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Feedback</button></a></li>
  </ul>


{{--   <ul class="surface-container d-flx-c">
    <li class="secondary-container on-secondary-container outline-border-r  outline-variant"><a href="{{ route('seeker.jobs.list')}}"><button id="tab_4" class="btn_tab btn-secondary" href=""><img src="{{asset('Resorce/search.png')}}" alt="noimg"></img>Search Job</button></a></li>
    <li><a href="{{ route('seeker_Dashboard')}}"><img src="{{ asset('Resorce/home.png')}}" alt="noimg"></img>Home</a></li>
    <li><a href="{{ route('seeker.profile.index')}}"><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Profile</a></li>
    <li><a href="{{ route('seeker.education.index')}}"><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Education</button></a></li>
    <li><a href="{{ route('seeker.resume.index')}}"><img src="{{ asset('assets/img/job seeker/application.png')}}" alt="noimg"></img>Resumes</a></li>

    <li><a href="{{ route('seeker.applicaions')}}"><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Job Status</a></li>
    <li><a href="{{ route('seeker.feedbck.create')}}"><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Feedback</a></li>
  </ul> --}}

{{--   <button class="btn-menu" style="font-size: 30px; cursor: pointer;position:absolute;top:0px;" onclick="openNav()">&#9776; <!-- <img src="filter128.png" alt=""> --></button>
 --}}  <div id="mySidenav" class="side_nav_box surface-container">
    <a href="javascript:void(0)" id="closebtn" class="closebtn on-surface-container" onclick="closeNav()">&times;</a>
      <ul>
          <li><a class="on-surface-container" href="{{ route('seeker_Dashboard')}}"> Home</a></li>
          <li><a class="on-surface-container" href="{{ route('seeker.profile.index')}}"> Employer</a></li>
          <li><a class="on-surface-container" href="{{ route('seeker.education.index')}}"> Seeker</a></li>
          <li><a class="on-surface-container" href="{{ route('seeker.resume.index')}}"> Resumes</a></li>
          <li><a class="on-surface-container" href="{{ route('seeker.applicaions')}}"> Applications</a></li>
          <li><a class="on-surface-container" href="{{ route('seeker.feedbck.create')}}"> Feedbck</a></li>
          
      </ul>
  </div>