<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsController2;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front_custom\JobsController as frontJobsController;
use App\Http\Controllers\Auth_custom\AuthanticationController;

use App\Http\Controllers\Employer as Employer;
use App\Http\Controllers\Employer\DashboardController;
use App\Http\Controllers\Employer\JobsController;
use App\Http\Controllers\Employer\EmployerController;


use App\Http\Controllers\Seeker as Seeker;
use App\Http\Controllers\Seeker\SeekerController;
use App\Http\Controllers\Seeker\EducationController;
use App\Http\Controllers\Seeker\FeedbackController;
use App\Http\Controllers\Seeker\DocumentController;

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
define('PAGINATE_DEFAULT', 5);
/* Route::get('/login', [App\Http\Controllers\Auth\LoginController::class])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register'); */
//Route::get('/login2', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Auth::routes();
Route::get('/my_data', function () {
    return view('my_data',[
        'seeker' => App\Models\Job::All()
    ]);
});
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');
Route::get('/home', function () { return view('pages.welcome'); })->name("home");
Route::get('/news', function () { return view('pages.news'); })->name("news");
Route::get('/aboute', function () { return view('pages.aboute'); })->name("aboute");
Route::get('/contact', function () { return view('pages.contact'); })->name("contact");



Route::get('employer',[DashboardController::class, 'index'])->name("employer_Dashboard");
Route::get('seeker', [Seeker\DashboardController::class, 'index'])->name('seeker_Dashboard');
Route::get('seeker/jobs', [frontJobsController::class, 'index'])->name('seeker.jobs.list');
Route::get('seeker/jobs/detaile/{id}', [frontJobsController::class, 'detaile'])->name('seeker.jobs.detaile');
Route::post('seeker/jobs/apply/{id}', [frontJobsController::class, 'apply'])->name('seeker.jobs.apply');


############################## BEGEN Auth ###############################
//Route::get('auth/login', [AuthanticationController::class, 'index'])->name('auth.login');
Route::get('auth/seeker/register', [AuthanticationController::class, 'seekerReg'])->name('seeker.register');
Route::get('auth/employer/register', [AuthanticationController::class, 'employerReg'])->name('employer.register');
############################## End Auth ###############################


############################## BEGEN JOB SEEKER MANAGMENT ###############################
Route::group(['prefix'=>'seeker', 'namespace'=>'Seeker'],function(){

    Route::get('profile', [SeekerController::class, 'index'])->name('seeker.profile.index');
    Route::get('profile/edit/{seeker}', [SeekerController::class, 'edit'])->name('seeker.profile.edit');
    Route::put('profile/update/{id}', [SeekerController::class, 'update'])->name('seeker.profile.update');

    Route::get('education2', [EducationController::class, 'index'])->name('seeker.education.index');
    Route::post('education', [EducationController::class, 'store'])->name('seeker.education.store');
    Route::get('education/create', [EducationController::class, 'create'])->name('seeker.education.create');
    Route::get('education/{id}/edit', [EducationController::class, 'edit'])->name('seeker.education.edit');
    Route::put('education/update/{id}', [EducationController::class, 'update'])->name('seeker.education.update');
    /* Route::delete('education/delete/{id}', [EducationController::class, 'destroy'])->name('seeker.education.destroy'); */
    //for ajax
    Route::post('education/delete', [EducationController::class, 'destroy'])->name('seeker.education.destroy');

    Route::get('document', [DocumentController::class, 'index'])->name('seeker.document.index');
    Route::post('document', [DocumentController::class, 'store'])->name('seeker.document.store');
    Route::get('document/create', [DocumentController::class, 'create'])->name('seeker.document.create');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('seeker.document.edit');
    Route::put('document/update/{id}', [DocumentController::class, 'update'])->name('seeker.document.update');
    Route::post('document/delete', [DocumentController::class, 'destroy'])->name('seeker.document.destroy');//using ajax

    Route::get('applications', [Seeker\ApplicationController::class, 'index'])->name('seeker.applicaions');
    Route::get('applications/show/{id}', [Seeker\ApplicationController::class, 'show'])->name('seeker.applicaion.show');

    Route::get('feedback', [FeedbackController::class, 'create'])->name('seeker.feedback.create');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('seeker.feedback.store');

});
############################## END JOB SEEKER MANAGMENT ###############################

############################## BEGEN EMPLOYER MANAGMENT ###############################
Route::group(['prefix'=>'employer'],function(){

    Route::get('profile', [EmployerController::class, 'index'])->name('Employer.profile.profile');
    Route::get('profile/edit/{id}', [EmployerController::class, 'edit'])->name('Employer.profile.edit');

    Route::resource('employer.jobs',JobsController::class);

    Route::get('applications', [Employer\ApplicationController::class, 'index'])->name('Employer.applicaions');
    Route::get('applications/{employer}/show/{job}', [Employer\ApplicationController::class, 'show'])->name('employer.application.show');
    Route::post('applications/approve', [Employer\ApplicationController::class, 'approve'])->name('Employer.applicaion.approve');

});
############################## END EMPLOYER MANAGMENT ###############################
$namespace =  'App\Http\Controllers';
 enum options:string  {
    case login = 'login';
    case verify = 'verify';
    case confirm= 'confirm';
    case reset= 'reset';
    case register= 'register';
    case logout= 'logout';
}

Route::group(['namespace' => $namespace, ], function(){
    Route::get('auth\login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('auth\login', 'Auth\LoginController@showLoginForm')->name('auth.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
