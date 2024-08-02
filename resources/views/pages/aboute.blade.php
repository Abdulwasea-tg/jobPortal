@extends('layout.master')

@section('title', 'Login')
@section('css')
<style>
            #title{
          font-size: 4rem;
          font-weight:500;
        }
        @media only screen and (max-width: 500px){
            #title{
          font-size: 2rem;
          font-weight:400;
        }
        }
</style>


@endsection


@section('content')
<main>
    <section class="section-head">
        <div class="container">
          <div class="title">
            <h1 class="on-tertiary">About us</h1>
          </div>
    
        </div>
    </section>
      <!-- =====================| JOB DETAILS SECTION BEGIN |================== -->
      <section class="listing-job surface">
        <div class="content">
          {{-- Heder job --}}
          <article class="jobs">
            {{-- (1)-CONTAINER --}}
            <div class="container">
                <div class="row  {{-- surface-container-low --}} on-surface-container">
                    <div class="col outline">
                        <dive class="col">
                            <div class="col">
                                <h6 class="on-outline-variant">WHAT WE ARE DOING</h6>
                                <p class="headline" id="title">24k Talented people are getting Jobs</p>
                            </div>
                            <div class="col">
                                <p>Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                            </div>
                            <div class="col">
                                <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                            </div>
                            <div class="col">
                                <a href="{{ route('login') }}"><button type="button" class="btn-outlin">Login</button></a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/service/support-img.jpg')}}" alt=""> 
                        </div>
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