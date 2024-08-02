<?php

namespace App\Http\Controllers\Auth_custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seeker;
use App\Models\Employer;

class AuthanticationController extends Controller
{
    public function index()
    {
        return view('auth_custom/login'); 
    }
    public function login(Request $request)
    {
        $id = 0;
        $role = $request->user_type;
        if ($role == 'Admin') {
            $data = $request->validate([
                'email'=>'required|email|unique:email user',
                'password'=>'required|'
            ]);
        }
        if ($role == 'JobSeeker') {
            $data = $request->validate([
                'email'=>'required|email|unique:email JobSeekerReg',
                'password'=>'required|'
            ]);

        }
        if ($role == 'Employer') {
            $data = $request->validate([
                'email'=>'required|email|unique:email JobSeekerReg',
                'password'=>'required|'
            ]);
        }

        $id = Seeker::whrer('email', $data['email'])->select('JobSeekId')->get();
        return view('seekers/index');
    }

    public function seekerReg()
    {
        return view('auth_custom/seekerReg');
    }

    public function employerReg()
    {
        return view('auth_custom/employerReg');
    }
}
