<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home','HomeController@index');

Route::get('/', function(){

    if(\Auth::check()){
        return view('home');
    }
    return view('welcome');
});


Auth::routes();




Route::group(['middleware'=>'auth','prefix'=>'user'],function(){

    Route::any('/{modules}/{controller}/{function}/{action}','RouteController@router');
    Route::any('/{modules}/{controller}/{function}','RouteController@router');
    Route::any('/{modules}/{controller}','RouteController@router');
    Route::any('/{modules}','RouteController@router');

});

Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){


    Route::any('/{modules}/{controller}/{function}/{action}','RouteController@router');
    Route::any('/{modules}/{controller}/{function}','RouteController@router');
    Route::any('/{modules}/{controller}','RouteController@router');
    Route::any('/{modules}','RouteController@router');

});

Route::any('/{modules}/{controller}/{function}/{action}','RouteController@router');
Route::any('/{modules}/{controller}/{function}','RouteController@router');
Route::any('/{modules}/{controller}','RouteController@router');
Route::any('/{modules}','RouteController@router');


