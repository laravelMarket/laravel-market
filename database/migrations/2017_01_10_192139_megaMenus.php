<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MegaMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mega_menus', function(Blueprint $table) {
            $table->increments('id');
            $table->string('route');
            $table->string('txt');
            $table->integer('style');
            $table->enum('target',['blank','self'])->default('self');
        });

        Schema::create('mega_menu_items', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('mega_menu_id');
            $table->string('route');
            $table->string('txt');

            $table->enum('target',['blank','self'])->default('self');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('mega_menus');
        Schema::drop('mega_menu_items');
    }
}
