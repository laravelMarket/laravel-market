<?php

namespace App\Modules\Frontend;

class Router
{
    public static function routes(){


        \Route::any('/{title}/c/{id}','RouteController@category')->where('id', '[0-9]+');
        \Route::any('/{title}/p/{id}','RouteController@product');
    }
}