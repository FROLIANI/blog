<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\sessionController;

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
    return view('pages.register');
});



Route::get('Ernest', function () {
    dd("Hellow world");
});


Route::get('inc', function () {
    return view('pages.home');
});


Route::get('me', function () {
    return response('<h3>This is Frolian</h3>',200);
});

//How to pass id to the browser
Route::get('/posts/{id}', function($id){
    return response('This is posts '.$id);
});

//request
Route::get('/search',function(Request $request){
 dd($request);
});

//for checking name and city
Route::get('/check',function(Request $request){
     return$request->name.''.request->city;
});

Route::get('pages.home',[FrontendController::class,'getHomePage']);

Route::post('user-register',[UsersController::class,'store']);

Route::get('/session/get',[sessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set',[sessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/remove',[sessionController::class, 'deleteSessionData'])->name('session.delete');


//Trial
// Route::get('/well', function(){
//     return view('trial');
// });

// Route::view('/home', 'trial');

Route::get('/me',function(){
    // return view('linker');
    return redirect('trial');

});

Route::view('trial','trial');
Route::view('option','option');

//Display user in the browser/pass data in view

Route::get('/users/{name}',function($name){
    return view("user",["name"->$name]);
});