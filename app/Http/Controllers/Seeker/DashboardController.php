<?php

namespace App\Http\Controllers\Seeker;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Job;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seeker.seeker');
    }

}
