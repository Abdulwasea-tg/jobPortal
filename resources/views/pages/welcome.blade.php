@extends('layout.master')

@section('title', 'Login')
@section('css')
<style>

        .section-head #title{
          font-size: 4rem;
          font-weight:900;
          line-height: 72px;
          /* margin-block-end: 60px; */
        }
        h2{
          font-size: 3rem;
          font-weight:500;
          margin-block: 20px;
        }
        input{
                line-height: 60px;
            }
            select{
                height: 60px;
            }
            .btn_search{
                width: 100%;
                line-height: 60px;
            }
        /* .col ,.row{
            border:1px solid green;
            border-radius: 12px;
            color:#1D1B20;
        } */
        /* .col{border-color: red;} */
        .row{
            /* gap:0px; */
            justify-content: space-around;
        }
        

        .form-box>*{
            flex: auto;
        }
        .details-box{
            align-self: center;
            align-self: auto;
        }
        .section-head{
            background-image: url("../../assets/img/hero/h1_hero.jpg");
            background-repeat: no-repeat;
            background-size: auto; 
            background-position: center; 
            
            height: 600px;
        }
        .section-head .content{
            height: 100%;
            align-items: center;
        }
        .section-head .container{
            background-image: none;
        }
        .section-head .title{
            background-color: inherit;
        }
        .tips img{
            width:120px;
            height: 120px;
            align-self: center;
        }
        .card{
            max-width: 320px;
            padding-block: 40px;
            padding-inline: 10px;
            border:1 solid #CAC4D0;
            border-radius: 12px;
        }

        @media only screen and (max-width: 572px){
            .section-head #title, #title{font-size: 3rem;font-weight:400;line-height: normal;}
            .form-box>*{flex:100%;}
            
        }
        @media only screen and (max-width: 767.98px){
            .row{gap:3px; padding:0px; row-gap: 16px;}
            .col{flex:auto;gap:3px; row-gap:16px;}
            .sp{display: none;}
            img{width:100%;height:100% ;}

            input{padding-inline: 8px;flex:100%;}
            .form-box>*{
                flex: 100%;
            }
            #title{/* font-size: 3rem; */}
            /* .section-head .content{
                padding-block: 20px;
            } */
            .sp{display: none;}
            .tips .cards-box{
                justify-content: space-around;   
            }
            .card-head{
                font-size: 1rem;
            }
        }
        @media only screen and (min-width: 768px){
            input{
                line-height: 60px;
            }
            select{
                height: 60px;
            }
            .sp{
                display: none;
            }
        }
        @media only screen and (min-width: 992px){
            .sp{display: flex;}
            #title{font-size: 4rem;font-weight:900;line-height: 72px;
            /* margin-block-end: 60px; */}
            input{line-height: 60px;font-size: 18px;}
            .btn_search{width: 100%;line-height: 60px;}
        }
        @media only screen and (max-width: 991.88px){
            .cards-box{justify-content:flex-start;}
            
        }
</style>


@endsection


@section('content')

    <main>
        <!-- Begin section 2 -->
        <section class="listing-job surface section-head">
            <div class="content {{-- surface-container-high --}}">
                <div class="container">
                    <div class="row details-box">
                        <div class="col" style="flex:3">
                            <div class="row">
                                <h1 id="title" class="on-surface">Find the most exciting startup jobs</h1>
        
                            </div>
                            <form action="" class="form-box row">
                                <div class="search-box">
                                    <input type="search" name="txt_search" id="" placeholder="Job title, Keywords or company">
                                </div>
                                <div class="country-pox">
                                    <select name="country" class="background" id="country"  placeholder="Country">
                                        <option value="select foucs" class="outline">Location</option>
                                        <option value="yem">Yemen</option>
                                        <option value="ksa">Saudia</option>
                                        <option value="US">Unaited State</option>

                                    </select>
                                </div>
                                <div class="submit-box">
                                    <button type="submit" name="btn_search" class="btn_search btn-primary">Search</button>
                                </div>   
                            </form>

                            {{-- <div class="row">
                                
                            </div> --}}
                        </div>
                        <div class="col sp">
                        </div>
                      </div>
                </div>
            </div>
        </section>
                <!-- Begin section 2 -->
        <section class="listing-job surface">
            <div class="content {{-- surface-bright --}}">
                <article class="jobs">
                    <div class="container tips">
                        <div class="row">
                            <h2 class="on-surface" style="text-align: center;" >How it works</h2>
                        </div>
                        <div class="row cards-box" style="text-align: center">
                            @include('component.card')

                            <div class="col card surface-container outline-variant outline-border-r" >
                                <img src="../assets/img/work/f2.png" alt="img">
                                <h3>2. Apply for job</h3>
                                <p>
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>
                
                            <div class="col card surface-container outline-variant outline-border-r" >
                                <img src="../assets/img/work/f3.png" alt="img">
                                <h3>1. Get your job</h3>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </article>
            </div>
        </section>

        {{-- BEGAIN ABOUTE US --}}
    </section>
    <!-- =====================| JOB DETAILS SECTION BEGIN |================== -->
    <section class="listing-job surface-container-highest">
      <div class="content surface-container-high">
        {{-- Heder job --}}
        <article class="jobs">
          {{-- (1)-CONTAINER --}}
          <div class="container">
              <div class="row  surface-container-low on-surface-container">
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
                              <a href=""><button type="button" class="btn-outlin">Login</button></a>
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

        {{-- ENDABOUTE US --}}


        <!-- Begin section 3 EMPLOYERS -->
        <section class="listing-job surface">
            <div class="content {{-- surface-bright --}}">
                <article class="jobs">
                    <div class="container tips">
                        <div class="row">
                        <h2 style="text-align: center;">Our Employers</h2>
                        </div>
                        <div class="row" style="text-align: center">
                            <div class="col card surface-container outline-variant outline-border-r">
                                <img src="../assets/img/icon/image-medium.svg" alt="img">
                                <center><h3>1.Search job</h3></center>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>

                            <div class="col card surface-container outline-variant outline-border-r" style="width: 300px;" >
                                <img src="../assets/img/icon/image-thumbnail.svg" alt="img">
                                <h3>2. Apply for job</h3>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>

                            <div class="col card surface-container outline-variant outline-border-r" style="width: 300px;" >
                                <img src="../assets/img/icon/image-thumbnail.svg" alt="img">
                                <h3>1. Get your job</h3>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Begin section 4 -->
        <section class="listing-job surface">
            <div class="content {{-- surface-bright --}}">
                <article class="jobs">
                    <div class="container tips">
                        <div class="row">
                        <h2 style="text-align: center;">Our Job Seekers</h2>
                        </div>
                        <div class="row" style="text-align: center">
                            <div class="col card surface-container outline-variant outline-border-r">
                                <img src="../assets/img/icon/image-medium.svg" alt="img">
                                <center><h3>1.Search job</h3></center>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>

                            <div class="col card surface-container outline-variant outline-border-r" style="width: 300px;" >
                                <img src="../assets/img/icon/image-thumbnail.svg" alt="img">
                                <h3>2. Apply for job</h3>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>

                            <div class="col card surface-container outline-variant outline-border-r" style="width: 300px;" >
                                <img src="../assets/img/icon/image-thumbnail.svg" alt="img">
                                <h3>1. Get your job</h3>
                                <p class="on-surface-container">
                                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <!-- Begin section 5 News -->
    </main>

    
@endsection