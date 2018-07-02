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
    return view('/home');
});

Route::get('CompanyProfile', function () {
    return view('/CompanyProfile');
});

Route::get('Solution', function () {
    return view('/Solution');
});

Route::get('PastProject', function () {
    return view('/PastProject');
});

Route::get('Career', function () {
    return view('/Career');
});

Route::get('Contact', 'mailController@index');
Route::post('Contact','mailController@postContact');
