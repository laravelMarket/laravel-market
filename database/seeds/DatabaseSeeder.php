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

       

        $products[] = [
            'product_name'=>'Test Product',
            'SKU'=>'12SBN-34RS',
            'company_id' =>1,
            'UPC'=>12345678,
            'MSRP'=>12.99,
            'ISBN'=>'N1234567',
            'cost'=>123.00,
            'brand'=>'sony',
            'model'=>'A300',
            'width'=>0,
            'height'=>0,
            'weight'=>123,
            'weight_type'=>'LBS',
            'short_description'=>' description sony product',
            'description'=>' description sony product',

        ];
        $productImages[] =  'p17.jpg';
        $products[] = [
            'product_name'=>'Test Product 2',
            'SKU'=>'123SBN-34RS',
            'company_id' =>1,
            'UPC'=>12345678,
            'MSRP'=>12.99,
            'ISBN'=>'N1234567',
            'cost'=>132.00,
            'brand'=>'sony',
            'model'=>'A300',
            'width'=>0,
            'height'=>0,
            'weight'=>423,
            'weight_type'=>'LBS',
            'short_description'=>' description sony product 2',
            'description'=>' description sony product 2',

        ];
        $productImages[] =  'p18.jpg';

        $products[] = [
            'product_name'=>'Test Product 3',
            'SKU'=>'123SBN-34RS',
            'company_id' =>1,
            'UPC'=>12345678,
            'MSRP'=>12.99,
            'ISBN'=>'N1234567',
            'cost'=>132.00,
            'brand'=>'sony',
            'model'=>'A300',
            'width'=>0,
            'height'=>0,
            'weight'=>523,
            'weight_type'=>'LBS',
            'short_description'=>' description sony product 3',
            'description'=>' description sony product 3',

        ];
        $productImages[] =  'p16.jpg';
        $products[] = [
            'product_name'=>'Test Product 4',
            'SKU'=>'123SBN-34RS',
            'company_id' =>1,
            'UPC'=>12345678,
            'MSRP'=>12.99,
            'ISBN'=>'N1234567',
            'cost'=>732.00,
            'brand'=>'sony',
            'model'=>'A300',
            'width'=>0,
            'height'=>0,
            'weight'=>523,
            'weight_type'=>'LBS',
            'description'=>' description sony product 4',

        ];
        $productImages[] =  'p15.jpg';
        $products[] = [
            'product_name'=>'Test Product 5',
            'SKU'=>'123SBN-34RS',
            'company_id' =>1,
            'UPC'=>12345678,
            'MSRP'=>12.99,
            'ISBN'=>'N1234567',
            'cost'=>345.00,
            'brand'=>'sony',
            'model'=>'A300',
            'width'=>0,
            'height'=>0,
            'weight'=>523,
            'weight_type'=>'LBS',
            'short_description'=>' description sony product 5',
            'description'=>' description sony product 5',

        ];
        $productImages[] =  'p14.jpg';

        $category_id = DB::table('product_categories')->insertGetId(['category_name'=>'Electronics','category_slug'=>'electronics']);
         DB::table('product_categories')->insertGetId(['category_name'=>'Computers','category_slug'=>'computers','parent'=>1]);

        foreach($products as $k=>$p){
            $product_id = DB::table('products')->insertGetId($p);
            DB::table('product_images')->insert(['image_name'=>$productImages[$k],'product_id'=>$product_id]);
            DB::table('product_category_relations')->insert(['product_id'=>$product_id,'category_id'=>$category_id]);


        }

        $menu_id = DB::table('mega_menus')->insertGetId([
            'route'=>'/electronics/c/1',
            'txt'=>'Electronics',
            'style'=>1
        ]);
        DB::table('mega_menu_items')->insert([
            'mega_menu_id'=>$menu_id,
            'route'=>'/computers/c/1',
            'txt'=>'Computers',
        ]);
    }
}
