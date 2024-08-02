@extends('employer.layout.app')

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
@section('content')

   <!-- center -->
   <div class="center">
       <!-- titel -->
       <span class="titel">
           <i class="icon"><img src="{{asset('assets/img/job seeker//application.png')}}" alt="noimg"></img></i>
           <h3>Applications</h3>    
       </span>

       <div style="width:500px;hight:25px;position:absolute; margin:auto;background-color:skyblue">
        @include('employer.layout.includes.alerts.success')
        @include('employer.layout.includes.alerts.errors')
     </div>
       
       <!-- countent1 -->
       <div>
            <!-- countent2 -->
           <div class="container">
               <form action="" method="post">


                   <div>
                    <table class='tb2'>
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>City</th>
                          <th>Emaile</th>
                          <th>Status</th>
                          <th>Description</th>
                          <th>action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php
                          $i=0;
                      @endphp
                      
                      @foreach ($job->seekers as $seeker)  
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $seeker->JobSeekerName }}</td>
                          <td>{{ $seeker->City }}</td>
                          <td>{{ $seeker->Email }}</td>
                          <td>{{ $seeker->pivot->Status }}</td>
                          <td>{{ $seeker->pivot->Description }}</td>
                          <td>
                              <div class="action_box">
                                  <a href="{{ route('employer.application.show',['employer'=>1,'job'=>$job->id]) }}">
                                      <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Edit.png')}}" alt="d"></button>
                                  </a>
                                  <form action="{{ route('employer.jobs.destroy',['employer'=>1,'job'=>$job->id]) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      {{-- <input type="submit" value="delete"> --}}
                                      <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Delete.png')}}" alt="d"></button>
                                  </form>
                              </div>
                          
                          </td>
                          </tr>  
                          @empty($job->seekers)
                          <tr >
                            <td colspan="6"> <center>No Applications found</center> </td>
                        </tr>
                          @endempty                     
                      @endforeach

     
                  </tbody>
              </table>
             </div>

               </form>


           </div>

           

       </div>    

    
@endsection