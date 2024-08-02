<?php

namespace App\Http\Controllers\front_custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthSeekerController extends Controller
{
    //
    public function create_seeker()
    {
        return view('auth/seeker_reg');
    }
    public function create_employer()
    {
        return view('auth/seeker_reg');
    }

    public function stor_seeker(Request $request)
    {

    }
    public function stor_employer(Request $request)
    {

    }
}
