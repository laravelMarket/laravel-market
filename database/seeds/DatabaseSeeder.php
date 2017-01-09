<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        \DB::table('applications')->insert(['name'=>'mistin','surname'=>'sulusoglu','age'=>30]);
        \DB::table('applications')->insert(['name'=>'eren','surname'=>'kartal','age'=>28]);


    }
}
