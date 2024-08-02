<?php

namespace App\Http\Controllers\Employer;

use App\Models\Employer;
use App\Http\Requests\Employer\StoreEmployerRequest;
use App\Http\Requests\Employer\UpdateEmployerRequest;
use App\Models\Seeker;
use Illuminate\Routing\Controller;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Seeker::find(15);
        return view('Employer/profile/profile', compact('result_set', $data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        $data = Seeker::find($employer->id);
        return view('seeker/profile/edit', compact('result_set', $data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
