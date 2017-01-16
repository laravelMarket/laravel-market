<?php

namespace App\Modules\Frontend;

use Illuminate\Support\Facades\Schema;

class Router
{
    public static function routes(){

        if(Schema::hasTable('route_maps')){
            $maps = \DB::table('route_maps')->get();

            foreach($maps as $map){
                \Route::any($map->route,'RouteController@'.$map->method)->where('id', '[0-9]+');
            }
        }

    }
}