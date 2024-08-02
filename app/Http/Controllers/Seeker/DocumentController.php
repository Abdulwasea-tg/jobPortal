<?php

namespace App\Http\Controllers\Seeker;
use App\Models\Seeker;
use App\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\SeekerTrait;

class DocumentController extends Controller
{
    use SeekerTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Seeker::find(15)->documents;
        return view('seeker/documents/index', compact('data'));
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeker/documents/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // dd($request->all());
                $data = $request->validate([
                    "document" =>'required|file',
                    "name"=>'required|string',
                    // "tag" => 'required|string|',
                    "type" => 'required|',
                ]/* , $this->getMessages() */);

        //                 Save file by Trait function
        $file_name = $this->saveDocument($request->document, "seekers/documents");
                try {
                    if (!$file_name) {
                        return redirect()->route('seeker.document.index')->with(['error' => "Failed to upload file"]);
                    }

                    // dd($file_name);
                    $seeker = Seeker::find(15);
                    $seeker->documents()->create([
                        'name' =>$request->name,
                        'tag' =>$file_name,
                        'type' =>$request->type,
                    ])->save();
                    return redirect()->route('seeker.document.index')->with(['success' => 'Add document success']);
        
                } catch (\Throwable $th) {
                    /* echo $th->getMessage(); */
                    return redirect()->route('seeker.document.index')->with(['error' => "There is a problem"."{{$th->getMessage()}}"]);
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
        $document = Document::find($id);
        if (!$document)
            return redirect()->back()->with(["error"=>" Sorry coudn't update data."]);

        return view('seeker/documents/edit', compact('document'));
        //return $document;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate user input
        $data = $request->validate([
            "document" =>'required|file',
            "name"=>'required|string',
            // "tag" => 'required|string|',
            "type" => 'required|',
        ]/* , $this->getMessages() */);

        try {
            // Save file by Trait function
            // $this->deleteDocument($request->document, "seekers/documents");
            $file_name = $this->saveDocument($request->document, "seekers/documents");

            // dd($file_name);
            $document = Document::find($id);
            if (!$document)
                return redirect()->back()->with(["error"=>" Sorry coudn't update data."]);
    
            $document->update([
                'name' =>$request->name,
                'tag' =>$file_name,
                'type' =>$request->type,
            ]);
            $document->save();
            return redirect()->route('seeker.document.index')->with(["success"=>"Updated data successfuly."]);
        } catch (\Throwable $th) {
            return redirect()->route('seeker.document.index')->with(["error"=>" There is a problem.{{$th->getMessage()}}"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $document = Document::find($request->id);

        if (!$document){
            return response()->json([
                'status'=>false,
                'id'=>$request->id,
            ]);
        }

        $document->delete();
        return response()->json([
            'status'=>true,
            'id'=>$request->id,
        ]);
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
