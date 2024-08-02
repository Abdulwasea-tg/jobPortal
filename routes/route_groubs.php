<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
})->name("home");
//#########################################################
// middleware
//########################################################

//#########################################################
// Controllers
//########################################################

//#########################################################
//Subdomain Routing
//########################################################

//#########################################################
//Route prefixes
//########################################################

//#########################################################
//Route name prefixes
//########################################################
//numric
Route::get('edit/{id}', function($id){
    return "Edited Record id= ".$id;
})//->where(['id' => '[0-9]+']);
  ->whereNumber('id');

//Alhpa  
Route::get('edit/{name}', function($name){
    return "Edited Record name= ".$name;
})//->where(['name' => '[a-z]+']);
  //->whereAlpha('name');
  ->whereAlphaNumeric('name');

//prig_much 
Route::get('edit/{id}/{name}', function($id,$name){
    return "Edited Record id= ".$id." name= ".$name;
})->where(['id' => '[0-9]+','name' => '[a-zA-Z]+']);

//whereIn
Route::get('cat/edit/{name}', function($name){
    return "name= ".$name;
})->whereIn('name',['Book','Animal', 'Star']);

//Universally unique identifier ex (10000000-1000-4000-8000-100000000000)
Route::get('cat/edit/{uuid}', function($uuid){
    return "uuid= ".$uuid;
})->whereUuid('uuid');

//############################
//Global Constraints
//############################

// Or you can defain patterns in RouteProvider file and  by using
// Route::pattern('id', '['0-9']');
//+++++++++++++++

Route::get('admin/users/{userid}/{userName}', function($userid, $userName){
    // Only executed if {userid} is numeric...
    return "Edited Record userid= ".$userid." userName= ".$userName;
});

//
// Encoded Forward Slashes / allow parameter exept /
//
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


