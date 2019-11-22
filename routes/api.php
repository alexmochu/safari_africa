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


// Route::resource('safaris', 'Api\SafarisController')
//     ->only(['index', 'store', 'show']);

Route::post('/safari/create', 'SafariController@store');
Route::get('/safari/edit/{id}', 'SafariController@edit');
Route::post('/safari/update/{id}', 'SafariController@update');
Route::delete('/safari/delete/{id}', 'SafariController@delete');
Route::get('/safaris', 'SafariController@index');
