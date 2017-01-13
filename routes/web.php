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
    return view('index');
});


Auth::routes();

\App\Modules\Frontend\Router::routes();
\App\Modules\User\Router::routes();
\App\Modules\Admin\Router::routes();









