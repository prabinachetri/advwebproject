<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\admin;
use App\Http\Controllers\supervisor;

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


Route::get("/",[homeControl::class,"index"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::view('/assignform','admin.assignproject');




// Route::get("upd/{id}",[supervisor::class,'dispproject']); 

// Route::POST("/edit",[supervisor::class,'update']); //form untuk post

Route::get('/display',[admin::class,"display"]);
Route::POST("/add",[admin::class,"assignproject"]);
Route::get('/projectdetails',[admin::class,"display"]);

Route::POST("/save",[supervisor::class,"savedata"]);
Route::get("/displaydetails",[supervisor::class,"display"]);
Route::get("/upd/{id}",[supervisor::class,"displayform"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
