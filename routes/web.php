<?php


Route::get('/', function () {
    return view('welcome');
});

Route::view('/','welcome');
Route::view('login','login')->name('login')->middleware('guest');
Route::view('dashboard','dashboard')->name('dashboard')->middleware('auth');

Route::post('login','LoginController@store'); 
Route::put('login','LoginController@logout'); 
Route::get('dashboard/{id}','DashboardController@show');

Route::get('dashboard/{id}/Requisitos', 'RequisitosController@show'); //jjvv

