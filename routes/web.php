<?php

use App\Models\Organisateurs;
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



//////    TOUTES LES ROUTES L ORGANISATEUR    ///////

Route::prefix('/organisateur')->group(function(){
    Route::get("/","App\Http\Controllers\OrganisateursController@index")->name("organisateur.base");
    Route::get("/eventcateg/{code_v}/{token}","App\Http\Controllers\OrganisateursController@eventcateg");
    Route::get("/eventnbcateg/{code_v}/{token}","App\Http\Controllers\OrganisateursController@eventnbcateg");

    Route::get("/index","App\Http\Controllers\OrganisateursController@index");
    Route::get("/billingchoice","App\Http\Controllers\OrganisateursController@billingchoice")->name('organisateur.billingMode');

    Route::get("/newEvents","App\Http\Controllers\OrganisateursController@newEvent")->name("organisateur.newEvents");
    Route::get("/newBillingEvents","App\Http\Controllers\OrganisateursController@newBillingEvent")->name("organisateur.newBillingEvents");
    Route::get("/second_phase/{id}/{token}","App\Http\Controllers\OrganisateursController@second_phase")->name("organisateur.second_phase");
    Route::get("/final_phase","App\Http\Controllers\OrganisateursController@final_phase")->name("organisateur.final_phase");

   // Route::get("/newBillingEvents","App\Http\Controllers\OrganisateursController@newBillingEvent")->name("organisateur.newBillingEvents");
    Route::get("/second_nb_phase/{id}/{token}","App\Http\Controllers\OrganisateursController@second_nb_phase")->name("organisateur.second_nb_phase");
   // Route::get("/final_phase","App\Http\Controllers\OrganisateursController@final_phase")->name("organisateur.final_phase");



    /*




    */



    Route::post("/first_validation_event","App\Http\Controllers\OrganisateursController@first_validation")->name("organisateur.first_validation");
    Route::post("/second_validation_event","App\Http\Controllers\OrganisateursController@seconde_validation")->name("organisateur.second_validation");
    Route::post("/thirds_validation_event","App\Http\Controllers\OrganisateursController@final_validation")->name("organisateur.final_validation");


    Route::post("/first_nb_validation","App\Http\Controllers\OrganisateursController@first_nb_validation")->name("organisateur.first_nb_validation");
    Route::post("/second_nb_validation_event","App\Http\Controllers\OrganisateursController@seconde_nb_validation")->name("organisateur.seconde_nb_validation");
    Route::post("/thirds_nb_validation_event","App\Http\Controllers\OrganisateursController@final_nb_validation")->name("organisateur.final_nb_validation");




});












Route::fallback(function(){
    return view("404");
});
