@extends('layout.master')

@section('title', 'Register')
@prependOnce('css')


@endPrependOnce


@section('content')
<main>
    {{-- <section class="section-head">
        <div class="container">
          <div class="title">
            <h1 class="on-tertiary">Job Details</h1>
          </div>
    
        </div>
    </section> --}}
      <!-- =====================| JOB DETAILS SECTION BEGIN |================== -->
      <section class="listing-job surface-container-highest">
        <div class="content surface-container-high">
          {{-- Heder job --}}
          <article class="jobs">
            {{-- (1)-JOB HEADER BEGIN --}}
            <div class="container">
                <div class="row surface-container-low on-surface-container">
                    <div class="col">
                        <img src="{{asset('assets/img/service/support-img.jpg')}}" alt=""> 
                    </div>
                    <form class="col" action="" method="post">
                        @csrf

                        <label for="" class="label-input">Full Name*</label>
                        <input type="text" name="Name" id="Name" value="{{ old('Name') }}">
                        @error('Name')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <div class="row">
                            <div class="col">
                                <label for="" class="label-input">Address*</label>
                                <input type="text" name="Address" id="Address" required value="{{ old('City') }}">
                                @error('Address')
                                        <span class="error">{{ $message }}</span> 
                                @enderror

                            </div>
                            <div class="col">
                                <label for="">City</label>
                                <input type="text" name="City" id="City" required value="{{ old('City  ') }}">
                                 @error('City')
                                    <span class="error">{{ $message }}</span>
                                 @enderror

                            </div>

                        </div>
                                
                    
                                
                        <div class="row">
                            <div class="col">
                                <label for="">Email</label>
                                <input type="email" name="Email" id="Email" required value="{{ old('Email ') }}">
                                @error('Email')
                                    <span class="error">{{ $message }}</span> 
                                @enderror

                            </div>
                            <div class="col">
                                <label for="" class="label-input">Mobile*</label>
                                <input type="text" name="Mobile" id="Mobile" required value="{{ old('Mobile  ') }}">
                                @error('Mobile')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>

                        </div>
                                

                                <label for="" class="label-input">Highst Qualification*</label>
                                <input type="text" name="Qualification" id="Qualification" required value="{{ old('Qualification ') }}">
                                @error('Qualification')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                
                        
                        
                            
                                <div>
                                    <label for="" class="label-input">Gender*</label>  
                                <input type="radio" name="gender" id="gender" value="male" style="width:auto">  Male
                                <input type="radio" name="gender" id="gender" value="female" style="width:auto">  Female
                                @error('gender')
                                    <span class="error"> {{ $message }}</span>
                                @enderror

                                </div>
                                
                            
                        
                        
                            
                            
                                <label for="" class="label-input">Birth Date*</label>
                                <input type="date" name="birthOD" id="birthOD" required value="{{ old('birthOD ') }}">
                                @error('birthOD')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            
                        
                        
                        
                            
                            
                                <label for="Resume" class="label-input">Resume</label>
                                <input type="file" name="Resume" id="Resume" required value="{{ old('Resume ') }}">
                                @error('Resume')
                                    <span class="error">{{ $message }} 
                                @enderror
                            
                        
                        
                            
                            
                                <label for="" class="label-input">User Name*</label>
                                <input type="text" name="Uname" id="Uname" required value="{{ old('Uname ') }}">
                                @error('Uname')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            
                        
                                <div class="row">
                                    <div class="col">
                                        <label for="Resume" class="label-input">Password*</label>
                                        <input type="password" name="Password" id="Password" required value="{{ old('Password ') }}">
                                        @error('Password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
        
                                    </div>
                                    <div class="col">
                                        <label for="Resume" class="label-input">Confirme Password*</label>
                                        <input type="password" name="CPassword" id="CPassword" required value="{{ old('CPassword ') }}">
                                        @error('CPassword')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
        
                                    </div>
        
                                </div>
                            
                            <p>
                                <label for="agree" class="label-input">Agree</label>
                                <input type="checkbox" name="agree" id="checked" value="1">
                                @error('agree')
                                <span class="error">{{"You must agree the term."}}</span>
                                <span class="error">{{$message}}</span>
                                @enderror

                            </p>
                                <input type="submit" name="btnJobSReg" class="primary on-primary" id="btnJobSReg" value="Creat Acount">
                                <p><center>Already have account?<a href="{{route('auth.login')}}" > Login</a></CEnter></p>
                                
                    </form>
        
                </div>

    
            </div>
            {{-- (1)-JOB HEADER END --}}
            

          </article>
          {{-- Job Overview  --}}

        </div>
      </section>
      
    </main>

  <!-- =====================| listing-job SECTION END |================== -->
   <!-- center -->

    
@endsection