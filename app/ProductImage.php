<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    public $table = 'product_images';
    protected $fillable = ['product_id','product_name'];
}
