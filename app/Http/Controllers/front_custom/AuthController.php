<?php

namespace App\Http\Controllers\front_custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function create_register()
    {
        return view('auth/seeker_reg');
    }

    public function stor_register(Request $request)
    {

    }
}
