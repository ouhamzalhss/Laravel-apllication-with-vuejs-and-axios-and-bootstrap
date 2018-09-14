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

Route::get('/accueil', function () {
    return view('accueil');
});



Route::get('/service', function () {
    return view('service');
});



Route::get('/getdata/{id}', 'CvController@getData');
Route::post('/addexperience', 'CvController@addExperience');
//Route::get('/getformations/{id}', 'CvController@getFormations');
Route::put('/updateexperience', 'CvController@updateExperience');
Route::delete('/deleteexperience/{id}', 'CvController@deleteExperience');

Route::post('/addformation', 'CvController@addFormation');
Route::put('/updateformation', 'CvController@updateFormation');
Route::delete('/deleteformation/{id}', 'CvController@deleteFormation');

Route::get('/laravelframework', 'CvController@laravelFramework');
Route::get('/listeframwork', 'CvController@listeFramwork');

Route::delete('/deletetechnologie/{id}', 'CvController@deleteTechnologie');



//cvs
Route::get('technologies', 'CvController@index');
Route::get('cvs/create', 'CvController@create');
Route::post('cvs', 'CvController@store');
Route::get('cvs/{id}/edit', 'CvController@edit');
Route::put('cvs/{id}', 'CvController@update');
Route::get('showcvs/{id}', 'CvController@show');
Route::delete('cvs/{id}', 'CvController@destroy');

//contact page
Route::get('contact/create', 'ContactController@create');
Route::post('contact', 'ContactController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


