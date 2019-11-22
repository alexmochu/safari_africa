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

Route::get('/{any}', 'SinglePageController@index'
    )->where('any', '.*');

// Route::get('/', function () {
//     return view('app');
// });

// Route::get('/safaris', function () {
//     return view('safaris');
// });

// Route::get('/safari', function () {
//     return view('safari');
// });

// Route::get('/operators', function () {
//     return view('operators');
// });

// Route::get('/operator', function () {
//     return view('operator');
// });

// Route::get('/operators/join', function () {
//     return view('registration');
// });

// Route::get('/destinaions', function () {
//     return view('destinations');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/signup', function () {
//     return view('signup');
// });
