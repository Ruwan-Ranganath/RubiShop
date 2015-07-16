<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesProductsOrdersCartsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //categories table
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('category_id');
            $table->string('category_name');
            $table->text('category_desc');
            $table->timestamps();
        });

        //products table
        Schema::create('products', function($table)
        {
            $table->increments('product_id');
            $table->string('product_name');
            $table->text('product_description');
            $table->double('price');
            $table->double('promo_price');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('product_category');
            $table->string('featured');
            $table->timestamps();
        });

        //orders table
        Schema::create('orders', function($table)
        {
            $table->increments('order_id');
            $table->timestamps();
        });

        //carts table - combination of products and orders
        Schema::create('carts', function($table)
        {
            $table->increments('cart_id');
            $table->integer('pro_id')->unsigned()->default(0); //product_id on products table
            $table->foreign('pro_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->integer('ord_id')->unsigned()->default(0); //order_id on orders table
            $table->foreign('ord_id')->references('order_id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::drop('orders');
        Schema::drop('products');
        Schema::drop('carts');

    }
}
