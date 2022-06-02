<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me',function () {
   return view('about');
});

Route::view('contact-me',"contact",[
    'page_name'=>"Contact Me Page",
    'page_description'=>"This Is Description"
]);

Route::get('category',function(){
$name = request("name");
return $name;
});
Route::get('category/{id}', function($id){
    $cat=[
        '1' => "books",
        '2' => "games",
        '3' => "Accessories"
    ];
    return view('category',
    ['the_id'=> $cat[$id] ?? "This Id is not Found"
    ]);
});

Route::get('/register-form',function(){
    return view('register');
});

Route::get('table',[ StudentsController::class,'readDate']);