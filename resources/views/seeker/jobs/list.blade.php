@extends('layout.master')

@section('css')
<style>
  /* aside{
    border:1px solid;
  } */
  .outline-border{
    border:1px solid;
  }

</style>
    
@endsection

@section('content')

<main>
  <section class="section-head">
    <div class="container">
      <div class="title">
        <h1 class="on-tertiary">Get Your Job</h1>
      </div>

    </div>


  </section>
  <!-- =====================| listing-job SECTION BEGIN |================== -->
  <section class="listing-job surface{{-- surface-container-highest --}}">
    <div class="content {{-- surface-container-high --}}">
      <aside class="filter">
        <div class="container">
          <!-- list box -->
          <ul class="filter-box  list-box surface-container-low outline-border-r outline-variant{{-- surface-container-low --}}">
            <li  class="list-item">
              <div class="list-item-body filter-head">
                <img class="filter-img" src="{{asset('assets/img/seeker/filter128.png')}}" alt="filter">
                <h4 class="headline on-surface-container">Filter Jobs</h4>
              </div>
            </li>
            
            <li class="list-item">
              <!-- list body -->
              <div class="list-item-body">
                <h3 class="headline on-surface-container">Job Category</h3>
                <select name="job_cat" id="category" class="outline background">
                  <option value="cat1">All Catagory</option>
                  <option value="cat1">Catagory 1</option>
                  <option value="cat1">Catagory 1</option>
                  <option value="cat1">Catagory 1</option>
                </select>
              </div>
            </li>
      
            <li class="list-item">
              <!-- list body -->
              <div class="list-item-body  outline">
                <ul class="check-list">
                  <li class="support-text-list"> <h3 class="headline on-surface-container">Job Type</h3></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ1" id=""> <label>Full Time</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ2" id=""> <label>Part Time</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ3" id=""> <label>Remote</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ4" id=""> <label>Frelance</label></li>
                </ul>
              </div>
            </li>
      
            <li class="list-item">
              <!-- list body -->
              <div class="list-item-body">
                <h3 class="headline on-surface-container">Job Category</h3>
                <select name="job_location" id="" class="outline">
                  <option value="cat1"> Any where</option>
                  <option value="cat1"> Catagory 1</option>
                  <option value="cat1"> Catagory 1</option>
                  <option value="cat1"> Catagory 1</option>
                </select>
              </div>
            </li>
      
            <li class="list-item">
              <!-- list body -->
              <div class="list-item-body outline">
                <ul class="check-list">
                  <li class="support-text-list"> <h3 class="headline on-surface-container">Experiance</h3></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ1" id=""> <label>1-2 Years</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ2" id=""> <label>2-3 Years</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ3" id=""> <label>3-6 Years</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ4" id=""> <label>6-more.. Years</label></li>
                </ul>
              </div>
            </li>
      
      
            <li class="list-item">
              <!-- list body -->
              <div class="list-item-body outline">
                <ul class="check-list">
                  <li class="support-text-list"> <h3 class="headline on-surface-container">Posted Withen</h3></li>
                  <li class="support-text-list"> <input type="checkbox" class="primary" name="typ1" id=""> <label>Any</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ2" id=""> <label>Today</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ3" id=""> <label>Last 2 days</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ4" id=""> <label>Last 3 days</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ4" id=""> <label>Last 5 days</label></li>
                  <li class="support-text-list"> <input type="checkbox" name="typ4" id=""> <label>Last 10 days</label></li>
                </ul>
            </div>
      
            </li>
      
            <li class="list-item">
              <button type="button" class="trailing-btn">Save</button>
      
            </li>
      
          </ul>
      
        </div>
  
      </aside>
      <!-- listing job -->
      <!-- ======================================= -->
      <article class="jobs">
        <div class="container">
          <!-- list box -->
          <ul class="list-box {{-- surface-container --}}">
            <!-- List header -->
            <li class="list-item list-head">
              <!-- list body -->
              <div class="list-item-body">
                <p>{!! count($jobs) !!} Jobs found</p>
              </div>
              <!-- list trailing -->
              <div class="list-trailing sort-list">
                {{-- <p class="headline on-surface-container">Sort by</p> --}}
                <select name="job_cat" id="category" class="outline" placeholder="Sort by">
                  <option value="cat1">Sort by</option>
                  <option value="cat1">Latest</option>
                  <option value="cat1">Name</option>
                  <option value="cat1">Job list 3</option>
                </select>
              </div>
            </li>

            @foreach($jobs as $job)
      
            <li class="list-item outline-border outline-variant surface-container" style="margin-block-end: 16px; border-radius:12px">
              <!-- list image -->
              <img src="{{asset('assets/img/seeker/d.jpg')}}" alt="" class="lead-img">
              <!-- list body -->
              <div class="list-item-body">
                <a href="{{ route('seeker.jobs.detaile', ['id'=>$job->id]) }}"><h3 class="headline on-surface-container">{{ $job->JobTitle}}</h3></a>
                <ul class="support-text-list outline">
                    <li class="company-name">{!! $job->CompanyName !!}</li>
                    <li class="job-location"><img src="{{asset('assets/img/seeker/location64.png')}}" alt="loc">{{ $job->Address}}</li>
                    <li class="salary">$5000-1000$</li>
                </ul>
              </div>
              <!-- list trailing -->
              <div class="list-trailing">
                <button type="button" class="trailing-btn btn-primary">Full time</button>
                <p class="trailing-text"> {!! $job->created_at !!}</p>
              </div>
            </li>
            <!-- <hr  class="outline-variant"> -->

            @endforeach
            
          </ul>
          {{-- <div>{!! $jobs->links() !!}</div> --}}
        </div>
  
      </article>
    </div>
  </section>
  <!-- =====================| listing-job SECTION END |================== -->
  
</main>
    
@endsection