<?php

namespace App\Http\Controllers\Seeker;

use App\Models\Seeker;
use App\Http\Requests\Seeker\StoreSeekerRequest;
use App\Http\Requests\Seeker\UpdateSeekerRequest;
use App\Traits\SeekerTrait;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SeekerController extends Controller
{
    use SeekerTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seeker = Seeker::find(15);
        return view('seeker/profile/index', compact('seeker'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seeker $Seeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($seeker)
    {
        $user = Seeker::find($seeker);
        return view('seeker/profile/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'JobSeekerName'=> 'required|string' ,
            'Address'=> 'required|',
            'City'=> 'required|string',
            'Email'=> 'required|email',
            'Mobile'=> 'required|',
            'Qualification'=> 'required|string',
            'Gender'=> 'required|' ,
            'BirthDate'=> 'required|date' ,
            /* 'Resume'=> 'file|max:5000' , */
            /* 'Status'=> 'required|' , */
            'UserName'=> 'required|',

        ]);

        $file_name = $this->saveDocument($request->Resume, "seekers/documents");
        // dd($path);
        // $request->Resume->move("seekers/documents'",$file_name);

        try {
            
            $seeker=Seeker::where('JobSeekId', $id)->update($data);
            $seeker=Seeker::where('JobSeekId', $id)->update(['Resume'=>$file_name]);
            if (!$seeker)
                return redirect()->back()->with(["error"=>" Sorry coudn't update data."]);
            
            return redirect()->route('seeker.profile.index')->with(['success' => 'Edit Success']);
        } catch (\Throwable $th) {

            return redirect()->route('seeker.profile.index')->with(['error' => "There is a problem {{$th->getMessage()}}"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seeker $Seeker)
    {
        //
    }

}
