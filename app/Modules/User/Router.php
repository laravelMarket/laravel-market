<?php

namespace App\Modules\User;

class Router
{
    public static function routes(){

        \Route::group(['middleware'=>'auth','prefix'=>'user'],function(){

            \Route::any('/{modules}/{controller}/{function}/{action}','RouteController@router');
            \Route::any('/{modules}/{controller}/{function}','RouteController@router');
            \Route::any('/{modules}/{controller}','RouteController@router');
            \Route::any('/{modules}','RouteController@router');

        });
    }
}