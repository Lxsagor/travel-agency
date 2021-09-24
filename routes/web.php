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

Route::view('/register','register');
Route::view('/login','login');
Route::get("/userList",[UserController::class,'userlist']);
Route::get("detail/{id}",[UserController::class,'detail']);
Route::get("delete/{id}",[UserController::class,'delete']);
Route::get('edit/{id}',[UserController::class,'show']);
Route::post('/edit',[UserController::class,'update']);

Route::post("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
