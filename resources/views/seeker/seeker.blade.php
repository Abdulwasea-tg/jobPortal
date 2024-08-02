@extends('seeker.layout.app')
{{-- @extends('layoutdash.app') --}}

@prependOnce('css')

<style>
        .nav li img{
        width: 64px;
        height: 64px;
        padding: 15px;
        background-color: #6650a41a;
        border: none;
        border-radius: 8px;
    }
    .count h1{
        font-size: 20pt;
        color: #6750A4;
    }

    .nav li{box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);}
/*     .menu{
        padding: 10px 0px;
        display: flex;
        flex-flow: row wrap;
        justify-content:space-between;
        list-style: none;
        width: 100%;
        background-color: white;

    }
    .l{
        width:200px;
        height: 100px;
        margin-right:5px;
        margin-bottom: 20px;      
        background-color: white;
    }
    .btn{
        position: relative;
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 8px;
        padding: 15px;
        display: flex;
        flex-flow:row nowrap;
        justify-content: space-between;
        text-align: left;
    }
    .menu li .btn img{
        width: 64px;
        height: 64px;
        padding: 15px;
        background-color: #6650a41a;
        border: none;
        border-radius: 8px;
    }
    .count{
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: last baseline;
    
    }
    .count h1{
        font-size: 20pt;
        color: #6750A4;
    } */
</style>
    
@endPrependOnce

@section('sidenav')
    @include("seeker/layout/includes/menu")
@endsection
@section('content')

    @section('title')
    <span class="titel">
        <i class="icon">add icon</i>
        <h3>Home</h3>    
    </span> 
    @endsection
    <ul class="nav d-flx-r jc-st g8 h">
        <li class="p16 w256 h128 d-flx-r jc-st ai-c surface-container outline-border-r outline-variant">
            <a class="d-flx-r flx1" href="{{ route('seeker.profile.index')}}">
                <img src="{{ asset('Resorce/user (1).png')}}" alt="noimg"></img>
                <span class="count ml16"><h1>1</h1> <span>Profile</span></span>
            </a>
        </li>
        <li class="p16 w256 h128 d-flx-r jc-st ai-c  surface-container outline-border-r outline-variant">
            <a class="d-flx-r flx1" href="{{ route('seeker.education.index')}}">
                <i class="icon"><img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img></i>
                <span class="count ml16"><h1>{{ \App\Models\Seeker::find(15)->educations()->get()->count() }}</h1>Education</span>
            </a>
        </li>
        <li class="p16 w256 h128 d-flx-r jc-st ai-c surface-container outline-border-r outline-variant">
            <a class="d-flx-r flx1" href="SearchJob.php">
                <img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img>
                <span class="count ml16"><h1>{{ \App\Models\Job::get()->count() }}</h1>Available Jops</span>
            </a>
        </li>
        <li class="p16 w256 h128 d-flx-r jc-st ai-c surface-container outline-border-r outline-variant">
            <a class="d-flx-r flx1" href="{{ route('seeker.applicaions')}}">
                <img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img>
                <span class="count ml16"><h1>{{ \App\Models\Seeker::find(15)->jobs()->get()->count() }}</h1>Job Status</span>
            </a>
        </li>
        <li class="p16 w256 h128 d-flx-r jc-st ai-c surface-container outline-border-r outline-variant">
            <a class="d-flx-r flx1" href="{{ route('seeker.feedback.create')}}">
                <img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img><span>Feedback</span>
            </a>
        </li>
    </ul>
    
@endsection