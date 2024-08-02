@extends('layout.master')

@section('title', 'Login')
@prependOnce('css')

@endPrependOnce


@section('content')

<main>
    <section class="section-head">
        <div class="container">
          <div class="title">
            <h1 class="on-tertiary">Job Details</h1>
          </div>
    
        </div>
    </section>
      {{--  =====================| SECTION BEGIN |==================  --}}
      <section class="listing-job surface-container-highest">
        <div class="content surface-container-high">
          {{-- Heder job --}}
          <article class="jobs">
            {{-- (1)-JOB HEADER BEGIN --}}
            <div class="container">
                {{-- BEGAIN ROW --}}
                <div class="row  surface-container-low on-surface-container">

                </div> 
                {{-- END ROW --}}
            </div>
            {{-- (1)-JOB HEADER END --}}
          </article>
          {{-- Heder job  --}}
        </div>
      </section>
      {{--  =====================| SECTION END |==================  --}}
    </main>
    <!-- center end -->

    
@endsection