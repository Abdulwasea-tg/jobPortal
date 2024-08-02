<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth')->except('showString2');

    }
    public function showString(){
        return "Welcom to string";
    }

    public function showString1(){
        return "Welcom to string";
    }
    public function showString2(){
        return "Welcom to string";
    }
    public function showString3(){
        return "Welcom to string";
    }
}
