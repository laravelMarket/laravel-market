<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table    = 'products';

	public $timestamps  = true;

	protected $fillable = [
	    'product_name',
        'company_id',
        'SKU',
        'UPC',
        'MSRP',
        'ISBN',
        'cost',
        'brand',
        'model',
        'width',
        'height',
        'weight',
        'weight_type',
        'short_description',
        'description'
    ];

	public function getAmazonProducts()
	{
		return $this->hasOne('App\ProductsAmazon', 'product_id');
	}

	public function getEbayProducts()
	{
		return $this->hasOne('App\ProductsEbay', 'product_id');
	}

	public function getCategories()
	{
		return $this->hasOne('App\ProductCategoryRelation', 'product_id');
	}

	public function getProductAttr()
	{
		return $this->hasMany('App\ProductAttr', 'product_id');
	}
	public function bundles()
	{
		return $this->hasMany('App\ProductBundle', 'product_id');
	}

}