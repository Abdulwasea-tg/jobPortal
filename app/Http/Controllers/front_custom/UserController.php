<?php

namespace App\Http\Controllers\front_custom;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showAminNames(){
        return "my_admin_data";
    }
}
