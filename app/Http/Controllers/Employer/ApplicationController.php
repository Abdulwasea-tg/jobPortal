<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Seeker;
use App\Models\Job;

class ApplicationController extends Controller
{
    public function index()
    {
        
        $emp= Employer::find(15);
        
        //$job = $emp->jobs()->withWhereHas("seekers:JobSeekId,JobSeekerName,City,Email")->get(['id','JobTitle']);
        //$job = $emp->jobs()->withWhereHas("seekers:JobSeekId,JobSeekerName,City,Email")->find(56, ['id','JobTitle']);
        $jobs = $emp->jobs()->get(['id','JobTitle']);
        //$all_applicant =$job->each->seekers()->get();
        //return $emp->jobSeeker()->getModels();
        //$seeker= $job->seekers()->get();
        //return $job->seekers()->get();
        //$app = $emp->jobSeeker()->get();
        //dd($job);
        //return $job;
        
        return view('employer.applications.index', compact('jobs'));
        //return $all_applicant;

    }

    public function show($employer, $job)
    {
        //dd($job);
        $job = Job::with('seekers:JobSeekId,JobSeekerName,City,Email')->find($job,['id','JobTitle']);
        //$seekers = $job->seekers;

        return view('employer.applications.show', compact('job'));
        //return $job;

    }
}