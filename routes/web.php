<?php


use App\Http\Controllers\users;
use App\Http\Controllers\article;
use App\Http\Controllers\video;
use App\Http\Controllers\subAdmin;
use App\Http\Controllers\question;

use App\Http\Controllers\admin;

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
Route::get('home', function () { return view('index');})->middleware("auth");
Route::get('dashborad', function () { return view('dashborad');})->middleware("auth")->middleware("admin");

Route::get("login",[users::class,"login"])->name("login")->middleware("guest");
Route::post("loginRequest",[users::class,"loginRequest"])->middleware("guest");

Route::get("register",[users::class,"register"])->middleware("guest");
Route::post("registerRequest",[users::class,"registerRequest"])->middleware("guest");

Route::get("article/list", [article::class,"list"])->middleware("auth");
Route::get("article/element/{id}", [article::class,"element"])->middleware("auth");
Route::get("article/create", [article::class,"create"])->middleware("admin")->middleware("auth");
Route::post("article/store", [article::class,"store"])->middleware("admin")->middleware("auth");
Route::get("article/edit/{id}", [article::class,"edit"])->middleware("admin")->middleware("auth");
Route::post("article/update", [article::class,"update"])->middleware("admin")->middleware("auth");
Route::get("article/delete/{id}", [article::class,"delete"])->middleware("admin")->middleware("auth");

Route::get("video/list", [video::class,"list"])->middleware("auth");
Route::get("video/element/{id}", [video::class,"element"])->middleware("auth");
Route::get("video/create", [video::class,"create"])->middleware("admin")->middleware("auth");
Route::post("video/store", [video::class,"store"])->middleware("admin")->middleware("auth");
Route::get("video/edit/{id}", [video::class,"edit"])->middleware("admin")->middleware("auth");
Route::post("video/update", [video::class,"update"])->middleware("admin")->middleware("auth");
Route::get("video/delete/{id}", [video::class,"delete"])->middleware("admin")->middleware("auth");

Route::get("subAdmin/list", [subAdmin::class,"list"])->middleware("admin")->middleware("auth");
Route::get("subAdmin/element/{id}", [subAdmin::class,"element"])->middleware("admin")->middleware("auth");
Route::get("subAdmin/create", [subAdmin::class,"create"])->middleware("admin")->middleware("auth");
Route::post("subAdmin/store", [subAdmin::class,"store"])->middleware("admin")->middleware("auth");
Route::get("subAdmin/edit/{id}", [subAdmin::class,"edit"])->middleware("admin")->middleware("auth");
Route::post("subAdmin/update", [subAdmin::class,"update"])->middleware("admin")->middleware("auth");
Route::get("subAdmin/delete/{id}", [subAdmin::class,"delete"])->middleware("admin")->middleware("auth");

Route::get("question/list", [question::class,"list"])->middleware("admin")->middleware("auth");
Route::get("question/element/{id}", [question::class,"element"])->middleware("admin")->middleware("auth");
Route::get("question/create", [question::class,"create"])->middleware("admin")->middleware("auth");
Route::post("question/store", [question::class,"store"])->middleware("admin")->middleware("auth");
Route::get("question/edit/{id}", [question::class,"edit"])->middleware("admin")->middleware("auth");
Route::post("question/update", [question::class,"update"])->middleware("admin")->middleware("auth");
Route::get("question/delete/{id}", [question::class,"delete"])->middleware("admin")->middleware("auth");

Route::get("logout", [users::class,"logout"]);

