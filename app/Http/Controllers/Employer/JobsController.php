<?php

namespace App\Http\Controllers\Employer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Job;
use App\Models\Employer;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empId=15;
        //$data = Job::get();
        $employer= Employer::find($empId);
        //$data = $employer->jobs()->get();
        $data = $employer->jobs()->paginate(PAGINATE_DEFAULT);

        /* dd($data->all()); */
        return view('employer/jobs/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employer/jobs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->merge(['CompanyName'=>'soft'])->validate([
            "CompanyName"=>'string',
            "JobTitle" => 'required|string|unique:jobs,JobTitle',
            "Vacancy" => 'required',
            "MinQualification" => 'required|string',
            /* "jobSalary" => 'required|int', */
            "Description" => 'required|min:5',
        ]);

        try {
            //Job::create($data)->save();
            $empId=15;
            $employer= Employer::find($empId);
            $employer->jobs()->create($data)->save();
            return redirect()->route('employer.jobs.index', ['employer'=>15])->with(['success' => 'Add Product success']);

        } catch (\Throwable $th) {
            /* echo $th->getMessage(); */
            return redirect()->route('employer.jobs.index', ['employer'=>15])->with(['error' => 'There is problem']);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,string $JobId)
    {
        $data = Job::find($JobId);
        //$data = Job::where('id', $JobId)->get()[0];

        //dd($data->collect());

        return view('employer/jobs/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, string $JobId)
    {
        $data = $request->validate([
            "JobTitle" => 'required|string',
            "Vacancy" => 'required',
            "MinQualification" => 'required|string',
            /* "jobSalary" => 'required|int', */
            "Description" => 'required|min:5',
        ]);

        Job::where('id', $JobId)->update($data);
        /* $empId=15;
        $employer= Employer::find($empId);
        $employer->jobs()->create($data)->save(); */

        return redirect()->route('employer.jobs.index', ['employer'=>1])->with(['success' => 'Edit Success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $JobId)
    {
        Job::where('id', $JobId)->delete();
        /* $job = Job::find($JobId);
        if ($job) {
            Job::where('id', $JobId)->delete();
        } */
        return redirect()->back();
    }
}
