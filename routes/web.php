<?php

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

Route::get("/admin/index", "App\Http\Controllers\AdminsController@index");
Route::post("/admin/update_item", "App\Http\Controllers\AdminsController@update_admin");
Route::delete("/admin/delete_item/{token}", "App\Http\Controllers\AdminsController@delete_admin");
Route::post("/admin/create_admin","App\Http\Controllers\AdminsController@create_admin");
Route::get("/admin/read_item", "App\Http\Controllers\AdminsController@read_admin");

