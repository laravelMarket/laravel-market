<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('company_id');
			$table->integer('vendor_id')->default(0);
			$table->string('product_name', 255);
			$table->string('SKU', 255)->nullable();
			$table->string('UPC', 255)->nullable();
			$table->string('EAN', 255)->nullable();
			$table->string('ISBN', 255)->nullable();
			$table->decimal('MSRP')->default(0);
			$table->decimal('cost')->default(0);
			$table->string('brand', 255);
			$table->string('model', 255);
			$table->integer('width')->default(0);
			$table->integer('height')->default(0);
			$table->integer('length')->default(0);
			$table->integer('weight')->default(0);
			$table->enum('weight_type',['LBS','OZ'])->default('LBS');
			$table->string('short_description')->nullable();
			$table->text('description')->nullable();
			$table->timestamps();
		});

	}

	public function down()
	{
		Schema::drop('products');
	}
}