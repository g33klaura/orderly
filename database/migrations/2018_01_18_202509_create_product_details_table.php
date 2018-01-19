<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('pd_id');
            // Is foreign key in Products table (so check before re-naming from 'pd_id'!)

            $table->timestamps();

            $table->string('product_type', 100);
            // Product type (T-shirt, Crew, etc)

            $table->string('blank_name', 100);
            // Blank name **actually link to Blanks Table?? ~don't think so - instead blanks just help render a dropdown menu on Add Product card, then value gets re-saved to this table

            $table->string('blank_color', 80);
            // Blank color

            $table->string('ink_colors', 80);
            // Ink colors

            $table->string('product_alias', 80);
            // POS Alias

            $table->decimal('cost', 8, 2);
            // Cost

            // Foreign key ~ design id on products table - patrick says might not need
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
