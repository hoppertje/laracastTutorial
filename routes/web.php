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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bewoners', function () {
    return view('bewoners');
});

Route::get('/tradities', function () {
    return view('tradities');
});



Route::get('/articles','ArticlesController@index')->name('articles.index');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/create','ArticlesController@create'); // Order matters create needs to be on above {article}
Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}','ArticlesController@update');


//GET, POST, PUT, DELETE
//get /videos
//get /videos/create
// post /videos
// get /videos/2
// get /videos/2/edit
// put /videos/2
// delete /videos/2

