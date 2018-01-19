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
            $table->increments('id');
            // Leave as 'id'

            $table->timestamps();

            $table->string('product_name', 100);
            // Design name

            // Design ID (different than product id for details table)

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

            $table->integer('product_details_id')->unsigned();
            // Foreign key to product details table

            $table->boolean('favorite_product');
            // Favorited product
        });

        Schema::table('products', function($table) {
            $table->foreign('product_details_id')->references('pd_id')->on('product_details');
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
