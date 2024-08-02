<?php

namespace App\Http\Controllers\front;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Job;
use App\Models\Seeker;
use Illuminate\Validation\Rules\Exists;
use PHPUnit\Framework\Constraint\Count;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobs = Job::paginate(PAGINATE_DEFAULT);
        /* dd($data->all()); */
        return view('seeker/jobs/list', compact('jobs'));
    }

    /**
     * Display the specified resource.
     */
    public function detaile($id)
    {
        
        $job = Job::with(['seekers'=>function($q){
            $q->wherePivot("JobSeekId", 15);
        }])->find($id);
             
        //$applicant = $job->seekers->pivot;



        
        //dd(count($job->seekers));

        
        return view('seeker/jobs/detailes', compact('job'));
        //return $job;
    }

        /**
     * Display the specified resource.
     */
    public function apply(Request $request, $id)
    {
        //dd($id);
        //$job = Job::find($id);
        //dd('kk');
        $seeker = Seeker::find(15);
        $seeker->jobs()->attach($id, ['Status'=>'apply', 'Description'=>'no message']);

        //$seeker->jobs()->sync($id);

        return redirect()->back();
    }



}
