<?php

use App\Http\Controllers\Admin\FirstController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\UserController;
use App\Http\Controllers\NewsController;

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
    return 'wellcom admin';
});

Route::get('/admin', function () {
    return 'wellcom admin';
});

//Route::get('users', [UserController::class, 'showAminNames']);
Route::namespace('front')->group(function(){
   /*  Route::get('users', 'UserController@showAminNames'); */
    Route::get('users', [UserController::class, 'showAminNames']);
    Route::get('users', 'UserController@showAminNames');//defined in routeService provider
});



//
//Group, perfix, middleware
//

/* Route::prefix('userss')->group(function(){
    //Route::get('userss/show', [UserController::class, 'showAminNames']);
     Route::get('show', [UserController::class, 'showAminNames']);
     Route::delete('delete', [UserController::class, 'showAminNames']);
     Route::get('edit', [UserController::class, 'showAminNames']);
     Route::put('update', [UserController::class, 'showAminNames']);
 }); */
 //Route::get('show', [UserController::class, 'showAminNames']);

 //this shap is the same the above bout this bitter
 //الشكل الثاني للجروب
Route::group(['prefix' => 'userss'], function(){
    //userss root
    Route::get('/', function(){
        return 'wellcom to users routes';
    });
    Route::get('show', [UserController::class, 'showAminNames']);
    Route::delete('delete', [UserController::class, 'showAminNames']);
    Route::get('edit', [UserController::class, 'showAminNames']);
    Route::put('update', [UserController::class, 'showAminNames']);

});

//
//middle
// يخليك متى تقدر تزور ال يو ار ل ده في البروزير او ماتقدر تزورة
//

//كيف اقدر اخلي هذا الروت علية مدل ويراقدر ازورة او مااقدر
//first method
Route::get('check', function(){
    return 'middleware';
}) -> middleware("auth");

//second method
Route::group(['prefix' => 'addmin', 'middleware'=> 'auth'], function(){
    //userss root
    Route::get('/', function(){
        return 'wellcom to users routes';
    });
    Route::get('show', [UserController::class, 'showAminNames']);
    Route::delete('delete', [UserController::class, 'showAminNames']);
    Route::get('edit', [UserController::class, 'showAminNames']);
    Route::put('update', [UserController::class, 'showAminNames']);

});

//out: ERROR: Route [login] not defined.
// middleware("auth"); 
// يقول لك على شان تدخل الروت ده لازم ان تكون اوثنتكاتيد يعني عامل تسجيل دخول اسم المستخدك وكلمة المرور
// لو انت ماعامل كذا هوا يوديك الى روت اسمة لوج هن
// لابد ان نعملة من اجل تعمل دخول

Route::group(['namespace'=>'Admin'],function(){
    Route::get('first', [FirstController::class, 'showString'])->middleware('auth');
    Route::get('first1', [FirstController::class, 'showString1']);
    Route::get('first2', [FirstController::class, 'showString2']);
    Route::get('first3', [FirstController::class, 'showString3']);

});

Route::get('login', fn()=>"welcom to login page")->name('login');


//##############
//Controller & route Resorces
//##############

/* Route::resource('news', NewsController::class); */