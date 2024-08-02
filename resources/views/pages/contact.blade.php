@extends('layout.master')

@section('title', 'Contact Me')

@section('css')
<style>
    .list-item{
        width: 100%;
    }
    .input-form{
        width: 100%;

    }
    .input-form >*{
        flex: 100%;
    }
    .input-form input, .input-form textarea{
        width: 100%;
        line-height: 40px;
        padding-left: 16px;
    }
</style>
    
@endsection

@section('content')
<main>
    <section class="section-head">
      <div class="container">
        <div class="title">
          <h1 class="on-tertiary">Contact Us</h1>
        </div>

      </div>

    </section>

    <section class="listing-job surface{{-- -container-low --}}{{-- surface-container-highest --}}">
      <div class="content {{-- surface-container-low --}}">
        <!-- listing job -->
        <!-- ======================================= -->
        <article class="jobs">
          <div class="container">
            <!-- list box -->
            <ul class="list-box surface-container outline-variant" style="border:1px solid; border-radius:12px">
              <!-- List header -->
              <li class="list-item list-head">
                <!-- list body -->
                <p style="font-size: 1.5rem" class="on-surface-container">Get in Touch</p>
                {{-- <div class="list-item-body">
                  <p>Get in Touch</p>
                </div> --}}
              </li>
        
              <li class="list-item">
                <!-- list body -->
                <div class="list-item-body">
                    <form action="" method="post" class="contact-form">
                        <ul class="support-text-list input-form outline" style="flex-flow: row wrap; justify-content: space-between;">
                            <li>
                                <input type="text" name="name" id="name" placeholder="Enter your name*">
                            </li>
                            <li>
                                <input type="email" name="email" id="email" placeholder="Enter your email*">
                            </li>
                            <li>
                                <input type="text" name="subject"  placeholder="Enter Subject*">
                            </li>
                            <li>
                                <textarea class="background outline-border-r outline-variant" name="message" id="" cols="30" rows="9" placeholder="Enter message"></textarea>
                            </li>
                            <li>
                                <button type="submit" class="{{-- btn-send --}} btn-outlin" style="text-align: center; padding: 0px 40px;line-height: 40px;/* border: 1px solid #fb246a; */">Send</button>
                            </li>
                        </ul>
                    </form>
                </div>

              </li>


              
            </ul>
          </div> 
        </article>

        <aside class="filter">
          <div class="container">
            <!-- list box -->
            <ul class="filter-box  list-box surface-container">
              <li class="list-item">
                <!-- list body -->
                <div class="list-item-body  outline">
                    <ul class="check-list">
                        <li class="support-text-list"> <h3 class="headline on-surface-container">Job Type</h3></li>
                        <li class="support-text-list"><p>Address: Yemen - Taizz</p</li>
                        <li class="support-text-list"><p>Office No: 772053912</p></li>
                        <li class="support-text-list"><p>Mobile: 717168783</p></li>
                        <li class="support-text-list"><p>Email : jobportal@gmail.com</p></li>
                    </ul>
                </div>
              </li>
            </ul>
        
          </div>
        </aside>
      </div>
    </section> 
  </main>
@endsection


