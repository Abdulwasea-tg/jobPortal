<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Seeker;
use App\Models\Education;
use Dotenv\Validator;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Seeker::find(15)->educations;
        return view('seeker/educations/index', compact('data'));
        //return $educations;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeker/educations/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //dd($request->all());
                $data = $request->validate([
                    "Degree"=>'required|string',
                    "University" => 'required|string',
                    "PassingYear" => 'required|string',
                    "Percentage" => 'required|int',
                ], $this->getMessages());
        
                try {
                    $seeker = Seeker::find(15);
                    $seeker->educations()->create($data)->save();
                    return redirect()->route('seeker.education.index')->with(['success' => 'Add Education success']);
        
                } catch (\Throwable $th) {
                    /* echo $th->getMessage(); */
                    return redirect()->route('seeker.education.index')->with(['error' => 'There is a problem']);
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
    public function edit(string $id)
    {
        $education = Education::find($id);
        if (!$education)
            return redirect()->back()->with(["error"=>" Sorry coudn't update data."]);

        return view('seeker/educations/edit', compact('education'));
        //return $education;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate user input
        $data = $request->validate([
            "Degree"=>"required|string",
            "University"=>"required|string",
            "Percentage"=>"required|int",
            "PassingYear"=>"required|int",
        ]);

        try {
            $job = Education::find($id);
            if (!$job)
                return redirect()->back()->with(["error"=>" Sorry coudn't update data."]);
    
            $job->update($data);
            $job->save();
            return redirect()->route('seeker.education.index')->with(["success"=>"Updated data successfuly."]);
        } catch (\Throwable $th) {
            return redirect()->route('seeker.education.index')->with(["error"=>" There is a problem.{{$th->getMessage()}}"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $edu = Education::find($request->id);
        if ($edu){
            $edu->delete();
            return response()->json([
                'status'=>true,
                'id'=>$request->id,
            ]);
        }
            
        
        //return redirect()->back()->with(['success'=>'Deleted successfuly']);
    }

    public function getMessages()
    {
        return [
            "Degree.required"=>trans("messages.degree required"),
            "University.required" => __("messages.university required"),
        ];
    }
}
