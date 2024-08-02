@extends('employer.layout.app')

{{-- @include("job_portal/employer/jobs/gridview"); --}}
@section('content')

        <!-- center -->
        <div class="center">
            <!-- titel -->
            {{-- <span class="titel">
                <i class="icon"><img class="title_ico" src="{{ asset('Resorce/job.png')}}" alt="noimg"></img></i>
                <h3>Job Management</h3>    
            </span> --}}
            
            <!-- countent1 -->
            <!-- <div> -->
                {{-- Displaying the Validation Errors --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            
                 <!-- countent2 -->
                <div class="container">
    
                <form  action="{{ route('employer.jobs.update', ['employer'=>1, 'job'=>$data->id]) }}" method="post">
                    @csrf
                    @method('put')
                    
                    <table class="table-input">
                        <tr>
                            <td>
                                <label for="" class="label-input">Job Title</label>
                                <input type="text" name="JobTitle" placeholder="Enter Job Title*" value="{{ $data->JobTitle }}">
                                @error('JobTitle')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
    
                            <td>
                                <label for="" class="label-input">Total Vacancy</label>
                                <input type="number" name="Vacancy" placeholder="Enter Vacancy*" value="{{ $data->Vacancy }}">
                                @error('Vacancy')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="label-input">Qualification</label>
                                <input type="text" name="MinQualification" placeholder="Enter Qualification*" value="{{ $data->MinQualification }}">
                                @error('MinQualification')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                
                            </td>
    
                            <td>
                                <label for="" class="label-input">Salary</label>
                                <input type="number" name="jobSalary" placeholder="Enter Salary" value="{{ '5' }}">
                                @error('jobSalary')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="" class="label-input" style="display:block">Job Description</label>
                                <div class="job-desc">
                                    <textarea name="Description" id="" cols="100" rows="6" placeholder="Write job description..." >{{ $data->Description }}</textarea>
                                    @error('Description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                        <td><input type="submit"  value="update"></td>
                        </tr>
                    </table>
                </form>
             
    
                </div>
    
            <!-- </div>    --> 
        </div><!-- End center -->
    
@endsection