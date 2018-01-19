<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');  
            // Order ID

            $table->timestamps();  
            // Order date, or save new column? (Now() with formatting? Redundant?)

            $table->decimal('total_cost', 8, 2);
            // Total cost estimate

            $table->integer('details_id')->unsigned();
            // Foreign key column

            $table->text('notes');
            // Notes/Comments (maybe do for overall order if easier than allowing comments for each design...)

            $table->boolean('favorite_order');
            // Favorited order
        });

        Schema::table('orders', function($table) {
            $table->foreign('details_id')->references('id')->on('order_details');
            // Set foreign Key from order_details table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
