
@prependOnce('css')
    <style>
      @media only screen and (max-width: 767.98px){/* wrapper  = max-width:540; margin:auto */
      }
      @media only screen and (min-width: 991.88px){/* wrapper = ; margin:auto */
      }
      
      @media only screen and (min-width: 768px){/* wrapper  = max-width:720; margin:auto */
      }
      @media only screen and (min-width: 992px){/* wrapper = max-width:920; margin:auto */
      }
      @media only screen and (min-width: 1200px){/* wrapper = max-width:1200; margin:auto  */
      }
    </style>
@endPrependOnce
<header>
    <!-- =====================| SLIDE SECTION BEGIN |================== -->
    <section class="header surface-container">
      <div class="content">
        <!-- logo box -->
        <div class="d-flx-r flx1 jc-sb pi8">
          <div>
            <a  href="#"><img class="siz100" src="{{asset('assets/img/logo/logo.png')}}" alt="Job Finder" ></a>
          </div>
          <div class="autho-btn d-flx-r jc-sb ai-c gc16">
            <a href="{{ route('home') }}"><button  type="button" class="btn-primary">{{__('Go to Website')}}</button></a>
            <a href=""><button  type="button" class="btn-outlin">{{__('Logout')}}</button></a>
          </div>
        </div>
      </div>
    </section>
    {{--  =====================| SLIDE SECTION END |==================  --}}
</header>
{{--  =====================| HEADER END |================== --}}