@extends('layout.master')

@section('title', 'Login')
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
            {{-- (1)-CONTAINER --}}
            <div class="container">
                <div class="row  surface-container-low on-surface-container">

                    <div class="col" style="position: relative">
                      <img src="{{asset('assets/img/job seeker/circular loading.gif')}}" alt=""> 
                      <img src="{{asset('assets/img/job seeker/login.gif')}}" alt="" style="position: absolute"> 
                    </div>
                    <div class="col">
                        <h1>Login</h1>
                    <form class="col"  action="" method="post">
                        <div class="col">

                        </div>
                        <label class="f4" for="email">User Name*</label>
                        <input type="text" name="email" id="email" placeholder="Username" >
    
                        <label for="email">Password*</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
    
                        <label for="user_type">User Type*</label>
                        <select name="user_type" id="user_type">
                            <option value="Employer">Employer</option>
                            <option value="JobSeeker">JobSeeker</option>
                            <option value="Admin">Admin</option>
                        </select>
                        <input class="primary on-primary" type="submit" name="login" id="login" value="login">
                        <p>Dont have account?<a href="{{route('seeker.register')}}" > Registe</a></p>
                    </form>

                    </div>
                </div>
                

            </div>
            {{-- (1)-CONTAINER END --}}
          </article>
          {{-- Job Overview  --}}

        </div>
      </section>
      
    </main>

  <!-- =====================| listing-job SECTION END |================== -->
   <!-- center -->

    
@endsection