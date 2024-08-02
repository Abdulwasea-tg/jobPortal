{{-- @extends('employer.layout.app') --}}
@extends('layoutdash.app')

{{-- @include("job_portal/employer/jobs/gridview"); --}}
@prependOnce('css')
    <style>
        .error{
            font-size: small;
        }
        .nav{
            position:sticky;
            top: 10%;
        }
        .action_box{
            display: flex;
            gap: 10px;

        }
    </style>
@endPrependOnce
@section('sidenav')
    @include("employer/layout/includes/menu")
@endsection
@section('content')

        <!-- center -->
        <div class="center">
            <!-- titel -->
            <span class="titel">
                <i class="icon"><img class="title_ico" src="{{asset('assets/img/job seeker/job.png')}}" alt="noimg"></img></i>
                <h3>Job Management</h3>    
            </span>
            
            <!-- countent1 -->
            <!-- <div> -->
            
                 <!-- countent2 -->
                 <div {{-- style="width:500px;hight:25px;position:absolute; margin:auto;background-color:skyblue" --}}>
                    @include('employer.layout.includes.alerts.success')
                    @include('employer.layout.includes.alerts.errors')

                 </div>

                <div class="container">
                    <a href="{{ route('employer.jobs.create',['employer'=>1]) }}"><input type="submit" value="+ Create"></a>

                    <table class='table row'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Vacancy</th>
                                <th>Qualivication</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                        {{--  @foreach ($data as $item)                     
                            @endforeach --}}
                            @each('employer.jobs.Datagridview', $data, 'item', 'employer.jobs.emptyData')
                        </tbody>
                    </table>

                        
                    </div>
                    
                

                
                </div>
                
                
            <!-- </div>    --> 
        </div><!-- End center -->
        {!! $data->links() !!}
        
    
@endsection