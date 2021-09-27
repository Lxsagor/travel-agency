<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('mainbody');
});
Route::get('/ed', function () {
    return view('ed');
});



Route::view('/register','register');
Route::view('/login','login')->middleware('alreadyLoggedIn');
Route::get("/userList",[UserController::class,'userlist'])->middleware('isLoggedIn');
Route::get("detail/{id}",[UserController::class,'detail']);
Route::get("delete/{id}",[UserController::class,'delete']);
Route::get("edit/{id}",[UserController::class,'show']);
Route::put('/edit',[UserController::class,'update']);

Route::post("/register",[UserController::class,'register'])->name('register');
Route::post("/login",[UserController::class,'login']);
Route::get("/logout",[UserController::class,'logout']);

