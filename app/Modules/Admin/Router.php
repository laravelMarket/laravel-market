<?php

namespace App\Modules\Admin;

class Router
{
    public static function routes(){

        \Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){

            \Route::any('/{modules}/{controller}/{function}/{action}','RouteController@router');
            \Route::any('/{modules}/{controller}/{function}','RouteController@router');
            \Route::any('/{modules}/{controller}','RouteController@router');
            \Route::any('/{modules}','RouteController@router');

        });

    }
}