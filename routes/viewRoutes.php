<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsController2;
use App\Http\Controllers\ExampleController;
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
Route::get("/about-me", function(){
    return view("pages.aboute");
})->name("about");

Route::view("pages.countact-me", "countact");// alians to get

//Parametter of view function view(uri, view, Array of data)

Route::view("contact-me","countact",[
    "page_name"=>"Contac Me",
    "page_discription"=>"<script>hellow from Contact me view</script>"
]);
Route::view("contact-us","pages.contact",[
    "page_name"=>"Contac Us",
    "page_discription"=>"<script>hellow from Contact me view</script>"
])->name("contact");

Route::get("category/{id}",function($id){
    //$id = request("id");
    //$name = request("name");
    //return $id;

    // return view("category",[
    //     "the_id" => $id,
    // ]);

    $cats = [
        "1" => "Games",
        "2" => "Programmings",
        "3" => "Books"
    ];

    return view("pages.category",[
        "the_id" => $cats[$id] ?? "This Id Is Not Found"
    ]);
});


//#######################
//
//######################
Route::get("exampleview1", function(){
    return view('view_lesson/index')->with('id', 123);
});
Route::get("exampleview2", function(){
    $data['id'] =123;
    $data['name'] = 'abdu';

    $obj = new \stdClass;
    $obj->id = 123;
    $obj->name='abdu';
    /* return view('practice',$data); */
    return view('view_lesson/index',compact('obj'));
});
Route::view('practice','practic',['id'=>123]);