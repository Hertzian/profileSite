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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UsersController@index');
Route::get('/about', 'UsersController@about');
Route::get('/work', 'WorksController@work');
Route::get('/contact', 'UsersController@contact');

Route::prefix('admin')->group(function(){
    Route::get('/','UsersController@profileView');
    Route::get('/profile','UsersController@profileView');
    Route::post('/profile','UsersController@updateProfile');
    Route::get('/jobs','JobsController@jobsView');
    Route::post('/job/{id}','JobsController@updateJobs');
    Route::get('/work','WorksController@workView');
    Route::post('/work/{id}','WorksController@updateWork');
});

// Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

