<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryRelation extends Model
{
    //
    public $table = 'product_category_relations';

    public function productImages()
    {
        return $this->belongsToMany('App\ProductImage','product_id');
    }
}
