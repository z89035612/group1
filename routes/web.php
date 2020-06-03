<?php

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

<<<<<<< HEAD
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
=======
// ==============================================
Route::get('/users/{user}', function(\App\User $user){
    return $user;
});

// Voyager套件規則 ==============================
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> cherry
