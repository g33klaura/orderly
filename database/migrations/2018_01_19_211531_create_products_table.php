<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            
            $table->increments('product_id');
            // Product_id

            $table->timestamps();

            $table->string('product_name', 100);
            // Design name

            $table->string('department', 80);
            // Department

            $table->string('graphic_size', 80);
            // Graphic size

            $table->string('ink_type', 40);
            // Ink type

            $table->string('graphic_placement', 100);
            // Placement

            $table->string('image');
            // Image
            // Will need to figure out saving an image path***

            $table->text('product_notes');
            // Notes?

            $table->integer('p_details_id')->unsigned();
            // Foreign key to product details table

            $table->boolean('favorite_product');
            // Favorited product
        });

        Schema::table('products', function($table) {
            $table->foreign('p_details_id')->references('p_details_id')->on('product_details');
            // Set foreign Key from product_details table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
