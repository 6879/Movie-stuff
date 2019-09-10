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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function () {
    return view('index');
});
Route::get('admin/index', function () {
    return view('admin.index');
});
Route::get('admin/addtrailer', function () {
    return view('admin.addtrailer');
});
Route::post('/admin/addtrailer', 'ApiController@create');
Route::get('/', 'ApiController@view');

Route::get('/admin/allMovieTrailers', 'ApiController@show');
Route::get('allMovies', function () {
    return view('allMovies');
});
Route::get('allMovies', 'ApiController@showAllMovies');
Route::get('details&{id}', 'ApiController@detailsMovie');
Route::get('/admin/editTrailers&{id}', 'ApiController@editTrailers');
Route::post('/admin/edittrailers&{id}', 'ApiController@updateTrailers');
Route::get('/admin/deleteTrailers&{id}', 'ApiController@deleteTrailers');
Route::get('admin/addtvshows', function () {
    return view('admin.addtvshows');
});
Route::post('/admin/addtvshows', 'TvshowsController@create');
Route::get('/admin/alltvshows', 'TvshowsController@show');
Route::get('/', 'TvshowsController@view');
Route::get('alltvshows', function () {
    return view('alltvshows');
});
Route::get('alltvshows', 'TvshowsController@showalltvshows');
Route::get('detailtvshows&{id}', 'TvshowsController@detailtvshows');
Route::get('/admin/edittvshows&{id}', 'TvshowsController@edittvshows');
Route::post('/admin/editTvshows&{id}', 'TvshowsController@updatetvshows');
Route::get('/admin/deletetvshows&{id}', 'TvshowsController@deletetvshows');