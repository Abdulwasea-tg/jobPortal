<?php

namespace App\Http\Controllers\Seeker;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Seeker;
use App\Models\Job;
//use App\Models\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=15;
        $seeker=Seeker::with('jobs:id,JobTitle,CompanyName')->find($id);
        $applications =$seeker->jobs;          
        return view('seeker.applications', compact('applications'));
    }

    public function store()
    {
        return view('seeker.jobs.list');
    }

    
}
