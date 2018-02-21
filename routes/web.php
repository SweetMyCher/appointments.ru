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
    return view('index');
});

Route::get('/search', function () {
    return view('sql');
});


Route::get('/add', function () {
    return view('add');
});
Route::get('/prim', 'PrimController@getAdd');
Route::post('/fio', 'FioController@getFio');
Route::post('/preparat', 'PreparatController@getPreparat');
Route::post('/vremya_pr', 'Vremya_prController@getVremya_pr');
Route::post('/data_start', 'Data_startController@getData_start');
Route::post('/data_end', 'Data_endController@getData_end');
Route::post('/add_page', 'AddController@getAdd');

