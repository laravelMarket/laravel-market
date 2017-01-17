<?php

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









