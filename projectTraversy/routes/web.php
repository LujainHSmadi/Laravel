<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

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
Route::get('/',[ListingController::class,'index']);
// Route::get('/', function(){
    
//     return view('listings',[
//         'heading' => 'Latest Listing',
//         'listings' => Listing::all()]);
// });




Route::get('/listings/create',[ListingController::class,'create']);
Route::get('/listings/create',[ListingController::class,'create']);
Route::post('/listings',[ListingController::class,'store']);

// Route::get('/listings/{listing}', function (Listing $listing) {
//     //remember: Listing is a class model that inherit all model functions
//     //$listing is an object , it's carry all the DB
//     return view('listing', [
//         'listings' => $listing,
//     ]);

// });

// Route::get('/listings/{listing}', function (Listing $listing) {
//     //remember: Listing is a class model that inherit all model functions
//     //$listing is an object , it's carry all the DB
//     return view('listing', [
//         'listings' => $listing,
//     ]);

// });
// way 2

// Route::get('/listings/{id}', function($id){

//         return view('listing',[
//             'listings' => Listing::find($id)]);   
// });


// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>',200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo','bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' .''. $id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     return $request->name.''.$request->city;

// });