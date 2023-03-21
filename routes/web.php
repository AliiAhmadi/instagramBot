<?php

use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     // DB::table("posts")->where("id", 10)->where("email", "ali@gmail.com")->get();

//     // return view("main");
// });


ROute::get("/", "App\Http\Controllers\MainController@index");
