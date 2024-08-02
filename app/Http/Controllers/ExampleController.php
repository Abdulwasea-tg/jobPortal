<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/* use Illuminate\View\View as ViewResponse; */
/* use View; */
use App\Models\Test;

use Illuminate\Support\Facades\Validator;

class ExampleController extends Controller
{
    private $columns = ['name', 'content'];
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        //$test = Test::get();/* Test::all(); */
        $test = Test::get();/* Test::all(); */
        /* $trushed = Test::withTrashed()->get();/* Test::all(); */
        $trushed = Test::onlyTrashed()->get();/* Test::all(); */
        return view('croud_lesson/index', compact('test', 'trushed'));
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        /* return View::make('croud_lesson/creat'); */
        return view('croud_lesson/creat');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    { 
        //
        //method 1
        //
        //dd(request('name'), $request->content);
        //dd($request->get('name'), $request->content);
        //dd(Request::get('name'));// it works in privios verstion
        /*Adding data by using model */
        /* $test = new Test;
        $test->name = $request->name;
        $test->content = $request->content;
        $test->save(); */
        /*
        return redirect("job/create"); */

        //
        //method 3
        //

        //dd($request->all());
        //dd($request->only(['name', 'content']));
        //dd($request->except('_token'));

        //Test::create($request->only(['name', 'contect']));// what if the are allot if inputs?
        /* Test::create($request->only($this->columns));
        return redirect("job"); */

        //
        //validate data
        //
        /* $data = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ]); */
        //method 2
        /* $data = $this->validate(request(),[
            'name'=>'required|string',
            'content'=>'required|string',
        ]); */
        //method 3
        /* //use Illuminate\Support\Facades\Validator;
        $data = Validator::make(request()->all(),[
            'name'=>'required|string',
            'content'=>'required|string',
        ]);
        if($data->passes()){
            return back();
        } */
        //dd($data);

        $data = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ],[],[
            'name'=>'title',
            'content'=>'content data',
        ]);
        Test::create($data);
        return redirect("job");


    }

     /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        //
        /* return "wellcome to show id =".$id; */
        $test = Test::find($id);
        return view('croud_lesson/show', compact('test'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        //
        $test = Test::find($id);
        //dd($test);

        return view('croud_lesson/edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        //Test::where('id', $id)->update($request->only($this->columns));

        $data = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ],[],[
            'name'=>'title',
            'content'=>'content data',
        ]);
        Test::where('id', $id)->update($data);

        return redirect('job');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        //method 1
        /* $test = Test::find($id);
        $test->delete(); */

        //method 2
        Test::where('id', $id)->delete();

        return redirect('job');
    }

    public function restor($id){
        Test::where('id', $id)->restore();

        return redirect('job');
    }
    public function forcDelete($id){
        Test::where('id', $id)->forceDelete();

        return redirect('job');
    }
}
