@extends('seeker.layout.app')

@prependOnce('css')

    
@endPrependOnce

@section('content')

<!-- center -->
    <div class="center">

        <!-- titel -->
        @section('title')
            <span class="titel">
                <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
                <h3>Create</h3>    
            </span>
        @endsection
        
        <!-- countent1 -->
        <div>
            @include('employer.layout.includes.alerts.success')
            @include('employer.layout.includes.alerts.errors')
             <!-- countent2 -->

             
            <div class="container">
            <form action="{{route('seeker.education.store')}}" method="post">
                @csrf
                <table>
                    <thead>
                        <td>Creat Eductional Profile</td>
                    </thead>
                    <tr>
                        <td>Degree :</td>
                        <td><input type="text" name="Degree" placeholder="Enter degree*">
                        @error('Degree')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <span class="error"></span></td>
                        <td>University/Board Name:</td>
                        <td><input type="text" name="University" placeholder="Enter Univercity name*">
                        @error('University')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </tr>
                    <tr>
                        <td>Passing Year:</td>
                        <td>
                            <select name="PassingYear">
                                <?php for($year =(int) date("Y"); 1900<=$year;$year--){?>
                                    <option value="<?=$year;?>"><?=$year;?></option>
                                    <?php } ?>
                            </select> 
                            @error('PassingYear')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>


                        <td>Percentage(%):</td>
                        <td><input type="number" name="Percentage" placeholder="Enter Percentage*">
                        @error('Percentage')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" name="addEducation" value="Add"></td>
                    </tr>
                </table>
            </div>

        </div>    
    </div><!-- End center -->
@endsection    