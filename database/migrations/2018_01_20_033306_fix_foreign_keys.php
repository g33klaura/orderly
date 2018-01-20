<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function($table)
        {
            $table->dropForeign('products_p_details_id_foreign');
            $table->dropColumn('p_details_id');

            $table->integer('p_details_id')->unsigned();
            $table->foreign('p_details_id')->references('id')->on('product_details');
        });

        Schema::table('order_details', function($table)
        {
            $table->dropForeign('order_details_product_id_foreign');
            $table->dropColumn('product_id');

            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::table('orders', function($table)
        {
            $table->dropForeign('orders_details_id_foreign');
            $table->dropColumn('details_id');

            // Moved recreation of foreign key to separate migration, because Laravel doesn't want to play nice
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // No reversing. Sorry bud.
    }
}
