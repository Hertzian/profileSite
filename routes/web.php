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

Route::get('/', 'Interface2020_1Controller@index');
Route::get('/work/{workId}', 'Interface2020_1Controller@workDetail');
Route::get('/resume', 'Interface2020_1Controller@pdfResume');
Route::get('/download', 'Interface2020_1Controller@pdfResumeDownload');
// Route::get('/', 'UsersController@index');
// Route::get('/about', 'UsersController@about');
// Route::get('/work', 'WorksController@work');
// Route::get('/contact', 'UsersController@contact');

Route::prefix('admin')->group(function(){
    Route::get('/','UsersController@profileView');
    Route::get('/profile','UsersController@profileView');
    Route::post('/profile','UsersController@updateProfile');
    Route::get('/jobs','JobsController@jobsView');
    Route::post('/addjob','JobsController@newJob');
    Route::post('/job/{id}','JobsController@updateJobs');
    Route::post('/delete-job/{jobId}','JobsController@deleteJob');
    Route::get('/work','WorksController@workView');
    Route::post('/addwork','WorksController@addWork');
    Route::post('/work/{id}','WorksController@updateWork');
    Route::post('/delete-work/{workId}','WorksController@deleteWork');
    Route::get('/skills', 'SkillsController@skillView');
    Route::post('/addskill', 'SkillsController@newSkill');
    Route::post('/skill/{skillId}', 'SkillsController@updateSkill');
});

// Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

