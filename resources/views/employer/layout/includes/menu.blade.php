<div class="nav">
<ul>
    <li class="secondary-container"><a href="ManageWalkin.php"><button id="tab_4" class="btn_tab secondary-container" href=""><img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img>Post New Job</button></a></li>
    <li><a href="{{ route('employer_Dashboard')}}"><button id="tab_1" class="btn_tab" href=""><img src="{{ asset('Resorce/home.png')}}" alt="noimg"></img>Home</button></a></li>
    <li><a href="Profile.php"><button id="tab_2" class="btn_tab" href=""><img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>Profile</button></a></li>
    <li><a href="{{ route('employer.jobs.index', ['employer'=>1]) }}"><button id="tab_3" class="btn_tab" href=""><img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img>Jop Managment</button></a></li>

    <li><a href="{{ route('Employer.applicaions')}}"><button id="tab_5" class="btn_tab" href=""><img src="{{ asset('Resorce/application.png')}}" alt="noimg"></img>Application</button></a></li>
</ul>
</div>
