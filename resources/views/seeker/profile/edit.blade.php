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
                <h3>Edite</h3>    
            </span>
        @endsection

        
        <!-- countent1 -->
        <div>
             <!-- countent2 -->
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('seeker.profile.update',['id'=>$user->JobSeekId])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                <table class="table-input">
                
                    <tr>
                        <td colspan="2"><label for="" class="label-input">Full Name*</label>
                            <input type="text" name="JobSeekerName" id="txtName" value="{{$user->JobSeekerName}}">
                            @error('JobSeekerName')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label for="" class="label-input">Address*</label>
                            <input type="text" name="Address" id="txtAddress" required value="{{$user->Address}}">
                            @error('Address')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>

                        <td><label for="" class="label-input">City*</label>
                            <input type="text" name="City" id="txtCity" required value="{{$user->City}}">
                            @error('City')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="label-input">Email*</label>
                            <input type="email" name="Email" id="txtEmail" required value="{{$user->Email}}">
                            @error('Email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>

                        <td>
                            <label for="" class="label-input">Mobile*</label>
                            <input type="text" name="Mobile" id="txtMobile" required value="{{$user->Mobile}}">
                            @error('Mobile')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                        <td>
                            <label for="" class="label-input">Highst Qualification*</label>
                            <input type="text" name="Qualification" id="txtQualification" required value="{{$user->Qualification}}">
                            @error('Qualification')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>

                        <td>
                            <label for="" class="label-input">Gender*</label>  
                            <input type="radio" name="Gender" id="gender"  value="male" style="width:auto" @checked($user->Gender=="male")>  Male
                            <input type="radio" name="Gender" id="gender" value="female" style="width:auto"  @checked($user->Gender=="female")>  Female
                            @error('Gender')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="label-input">Birth Date*</label>
                            <input type="date" name="BirthDate" id="BirthDate" required value="{{$user->BirthDate}}">
                            @error('BirthDate')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <!-- 
                    <tr>
                        <td>Resume:</td>
                        <td><input type="file" name="Resume" id="Resume" required  value="$user->Resume">
                            <span class="error">*$error->ResumeErr</td>
                    </tr>-->
                    <tr>
                        <td><label for="" class="label-input">User Name*</label>
                            <input type="text" name="UserName" id="txtUname" required value="{{$user->UserName}}">
                            @error('UserName')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
<!--                     <tr>
                        <td>Password</td>
                        <td><input type="password" name="txtPassword" id="txtPassword" required value="<php /*  echo $user->Password"];  */?>">
                            <span class="error">*php /* echo $error->txtPasswordErr"];  */?></span></td>
                    </tr>
                    <tr>
                        <td>Confirme Password</td>
                        <td><input type="password" name="txtCPassword" id="txtCPassword" required value="php /* echo $user->Password"];  */?>">
                            <span class="error">*php /* echo $error->txtCPasswordErr"]; */ ?></span></td>
                    </tr>
                    <tr> -->
<!--                         <td>Security Question</td>
                        <td><input type="text" name="txtUname" id="txtSecQ" value=""></td>
                    </tr>
                    <tr>
                        <td>Answer</td>
                        <td><input type="text" name="txtUname" id="txtAnswer" value=""></td>
                    </tr> -->

                    <tr>
                        <td><label for="Resume" class="label-input">Resume</label>
                            <input type="file" name="Resume" id="Resume"  value="{{$user->Resume}}">
                            @error('Resume')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                   
                    <tr>
                        <td><input type="submit" id="UpdateProfile" value="Update"></td>
                    </tr>
                </table>
                </form>

            </div>

        </div>    
    </div><!-- End center -->

@endsection