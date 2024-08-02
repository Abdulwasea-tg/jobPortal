<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Seeker;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feed = Feedback::get();

        return $feed;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeker.feedback');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "Feedback" => "required|min:2",
        ]);
        $seeker = Seeker::find(15);
        if (!$seeker) {
            return redirect()->back()->with('error', __("Sending Failed"));
        }

        $seeker->feedbacks()->create($data);

        return redirect()->back()->with('success', __("Feedback sent successfuly"));
    }
}
