{{-- @extends('employer.layout.app') --}}
@extends('layoutdash.app')

@prependOnce('css')
<style>
    .menu{
        padding: 10px 0px;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        list-style: none;
        width: 100%;
        background-color: white;

    }
    .l{
        /* width: 25%; */
        width:200px;
        height: 100px;
        margin-right:5px;
        margin-bottom: 20px;  
        height: 100px;
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
    }

</style>
    
@endPrependOnce
@section('sidenav')
    @include("employer/layout/includes/menu")
@endsection
@section('content')
    
    <!-- center -->
    <div class="center">
        
        <!-- countent1 -->
        <div>
             <!-- countent2 -->
            <div class="container">
                    <ul class="menu">
                        <li class="l"><a href="{{ route('employer.jobs.index',['employer'=>1]) }}">
                            <button id="tab_3" class="btn" href=""><i class="icon">
                                <img src="{{ asset('Resorce/job.png')}}" alt="noimg"></img></i>
                                <span class="count"><h1>{{ \App\Models\Employer::find(15)->jobs()->get()->count() }}</h1>Jops</span></button></a></li>
                        <li class="l"><a href="Applications.php"><button id="tab_5" class="btn" href=""><i class="icon"><img src="{{ asset('Resorce/application.png')}}" alt="noimg"></img></i><span class="count"><h1>{{ \App\Models\Employer::find(15)->jobSeeker()->get()->count() }}</h1>Applications</span></button></a></li>
                    </ul>
            </div>

        </div>    
    </div><!-- End center -->
    
@endsection