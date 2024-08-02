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
                   <table>
                       <tr>

                           <td>Select Job Title:</td>
                           <td>
                               <select name="selectedJobTitle" id=""  >
                                   <option value="all">All Application</option>
                                   @if (isset($jobs) && $jobs->count() > 0)
                                       @foreach ($jobs as $job)
                                        <option value="{{$job->id}}" 
                                                @selected(old('selectedJobTitle') == $job->id)
                                                > {{ $job->JobTitle }} 
                                            </option>
                                       @endforeach
                                   @endif
                               </select>
                           </td>
                           <td><input type="submit" name="searchApplication" value="View Applicant"></td>
                       </tr>
                   </table>



               </form>

               <div>
                <table class='tb2'>
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Job Title</th>
                    <th>total applicant</th>
                  </tr>
              </thead>
              <tbody>
                @each('employer.applications.Datagridview', $jobs, 'job', 'employer.applications.emptyData')
              </tbody>
          </table>
         </div>



           </div>

           

       </div>    

    
@endsection