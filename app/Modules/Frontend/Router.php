<?php

namespace App\Modules\Frontend;

class Router
{
    public static function routes(){

        $maps = \DB::table('route_maps')->get();

        foreach($maps as $map){
            \Route::any($map->route,'RouteController@'.$map->method)->where('id', '[0-9]+');
        }


    }
}