<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/admin/addtrailer', 'ApiController@create');
Route::get('/', 'ApiController@view');
Route::get('alltvshows', 'TvshowsController@showalltvshows');
Route::get('detailtvshows&{id}', 'TvshowsController@detailtvshows');
Route::get('/admin/edittvshows&{id}', 'TvshowsController@edittvshows');
Route::get('allMovies', 'ApiController@showAllMovies');
Route::get('details&{id}', 'ApiController@detailsMovie');
Route::get('/admin/editTrailers&{id}', 'ApiController@editTrailers');