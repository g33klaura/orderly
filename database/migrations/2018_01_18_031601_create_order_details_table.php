<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // Design ID (foreign key from products?)
            // Department
            // Graphic Size
            // Placement
            // Blank Name
            // Blank Color
            // Ink Colors
            // Qty-XSmall
            // Qty-Small
            // Qty-Medium
            // Qty-Large
            // Qty-XLarge
            // Qty-2XLarge
            // Qty-3XLarge
            // Total Qty
            // Design Cost
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
