@extends('layout.master')

@prependOnce('css')
<style>
    table tr th{
        text-align: left;
    }
    /* .gap{
      display:flex;
      flex-flow: column nowrap;
      column-gap: 16px
    } */
</style>

    
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
      <!-- =====================| JOB DETAILS SECTION BEGIN |================== -->
      <section class="listing-job surface{{-- surface-container-highest --}}">
        <div class="content {{-- surface-container-high --}}">
          {{-- Heder job --}}
          <article class="jobs surface-container outline-border-r outline-variant">
            {{-- (1)-JOB HEADER BEGIN --}}
            <div class="container">
              <!-- list box -->
              <ul class="list-box">
                <!-- List header -->
                {{-- <li class="list-item list-head">
                  <!-- list body -->
                  <div class="list-item-body">
                    <p>{!! count($jobs) !!} Jobs found</p>
                  </div>
                  <!-- list trailing -->
                  <div class="list-trailing sort-list">
                    <p class="headline on-surface-container">Sort by</p>
                    <select name="job_cat" id="category" class="outline">
                      <option value="cat1">none</option>
                      <option value="cat1">Job list 1</option>
                      <option value="cat1">Job list 3</option>
                      <option value="cat1">Job list 3</option>
                    </select>
                  </div>
                </li> --}}

                <li class="list-item">
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
              </ul>
            </div>
            {{-- (1)-JOB HEADER END --}}
            {{-- (2)-JOB DESCRIPTION BEGIN --}}
            <div class="container">
              <div class="row">
                <ul class="list-box col on-surface-container">
                  <li class="support-text-list"> <h3 class="headline on-surface-container text1">Description</h3></li>
                  <li class="support-text-list"> 
                    <p class="on-surface-container">
                      Aulwaseatalabduly@gmail.com
                      717168783
                      www.linkedin.com/in/abdulwasea-tawfeeq-ghaleb-189b24257
                      Taiz, Yemen
    
                      Summary
                      ======
                      I'm Abdulwasea Tawfeeq. I hold a bachelor's degree in Information Technology from Taiz University. I seek challenging opportunities to fully use my skills for the organization's success.
    
    
                      Education
                      ======
                      Bachelor's in Information Technology
                      Taiz University
                      01/2019 - 07/2023
    
                      High school
                      Al hoda School
                      2006 - 2017
    
    
                      Skills
                      ======
                      Technical skills
                      - PHP
                      - Laravel framework
                      - Python
                      - C#
                      - HTML
                      - Javascript
                      - CSS3
                      - Java
                      - ORACLE
                      - MSSQL
                      - MySQL
                      - OOP
                      - Desktop Development
                      - Web Development
    
                      Soft skills
                      - Hardworking
                      - Problem solving
                      - Time management
                      - Teamwork
    
    
                      Projects
                      ======
                      Job Portal System
                      11/2023 - Ongoing
                      A Job Portal Website is a web-based platform that assists job seekers in searching for and applying to available positions across various companies. It also enables companies to post job openings, making them accessible to potential candidates. This portal is developed using PHP, Laravel framework, HTML, CSS, JavaScript, and MySQL. 
    
                      Smart Personal Assistant
                      05/2023 - 07/2023
                      Smart Personal Assistant(SPA) is a desktop-based application. It handles computer tasks by voice or typing. SPA uses natural language processing to convert voice commands to text. It was designed and developed with Python programming language and Tkinter GUI framework.
    
                      Hotel Management System
                      2022 - 02/2022
                      A web-based online Hotel Management System project in ASP.Net that allows you to manage residential hotel businesses and designed to assist with the day-to-day management of a hotel, resort, or similar property. This hotel management system is developed for hotels that are using a manual system to handle hotel processes. It helps you to manage your guest, one-click guest check-in/check-out, users, etc.
    
    
                      Languages
                      ======
                      Arabic
    
                      English
                    </p>
                  </li>

                </ul>
              </div>
            </div> 

            {{-- (2)-JOB DESCRIPTION END --}}
          </article>
          {{-- Job Overview  --}}
          <aside class="col">
            {{-- (1)-JOB OVERVIEW BEGIN --}}
            <div class="container surface-container outline-border-r outline-variant">
              <ul class="filter-box  list-box" style="width: 100%">
                <li class="list-item">
                  <!-- list body -->
                  <div class="list-item-body  outline">
                      <ul class="check-list">
                          <li class="support-text-list"> <h3 class="headline on-surface-container">Job Overview</h3></li>
                          <li class="support-text-list"><p>Posted Date: {{ $job->created_at }}</p</li>
                          <li class="support-text-list"><p>Name: {{ $job->CompanyName }}</p</li>
                          <li class="support-text-list"><p>Job title: {{ $job->JobTitle }}</p></li>
                          <li class="support-text-list"><p>Vacncy: {{ $job->Vacancy }}</p></li>
                          <li class="support-text-list"><p>Qualification: {{ $job->MinQualification}}</p></li>
                      </ul>
                  </div>
                </li>
                <li class="list-item">
                  <div class="btn-box">
                    @if (count($job->seekers)>0)
                    <span>{{$job->seekers->first()->pivot->Status}}</span>
                    @else
                    <form action="{{ route('seeker.jobs.apply', ['id'=>$job->id]) }}" method="post">
                        @csrf
                        <button class="btn-primary {{-- trailing-btn --}} primary" type='submit'>Apply Now</button>
                    </form>
                    @endif
                  </div>
                </li>
              </ul>
            </div>

            {{-- (1)-JOB OVERVIEW END --}}
            {{-- (2)-JOB COMPANY INFO BEGIN --}}
            <div class="container surface-container outline-border-r outline-variant">
              <ul class="filter-box  list-box" style="width: 100%">
                <li class="list-item">
                  <!-- list body -->
                  <div class="list-item-body  outline">
                      <ul class="check-list">
                          <li class="support-text-list"> <h3 class="headline on-surface-container">Company Information</h3></li>
                          <li class="support-text-list"><p>Description: {{ $job->CompanyName }}</p</li>
                          <li class="support-text-list"><p>Name: {{ $job->CompanyName }}</p</li>
                          <li class="support-text-list"><p>Job title: {{ $job->JobTitle }}</p></li>
                          <li class="support-text-list"><p>Vacncy: {{ $job->Vacancy }}</p></li>
                          <li class="support-text-list"><p>Email : jobportal@gmail.com</p></li>
                      </ul>
                  </div>
                </li>
              </ul>
            </div>
            {{-- (2)-JOB COMPANY INFO END --}}     
          </aside>

        </div>
      </section>
    </main>

  <!-- =====================| listing-job SECTION END |================== -->
   <!-- center -->

    
@endsection