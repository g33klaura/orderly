<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_blanks', function($table)
        {
            $table->renameColumn('blanks_id', 'id');
        });

        Schema::table('product_details', function($table)
        {
            $table->renameColumn('p_details_id', 'id');
        });

        Schema::table('products', function($table)
        {
            $table->renameColumn('products_id', 'id');

            $table->dropForeign('p_details_id');
            $table->foreign('p_details_id')->references('id')->on('product_details')->onDelete('cascade');
        });

        Schema::table('order_details', function($table)
        {
            $table->renameColumn('details_id', 'id');

            $table->dropForeign('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::table('orders', function($table)
        {
            $table->renameColumn('order_id', 'id');

            $table->dropForeign('details_id');
            $table->foreign('details_id')->references('id')->on('order_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_blanks', function($table)
        {
            $table->renameColumn('id', 'blanks_id');
        });

        Schema::table('product_details', function($table)
        {
            $table->renameColumn('id', 'p_details_id');
        });

        Schema::table('products', function($table)
        {
            $table->renameColumn('id', 'products_id');
        });

        Schema::table('order_details', function($table)
        {
            $table->renameColumn('id', 'details_id');
        });

        Schema::table('orders', function($table)
        {
            $table->renameColumn('id', 'order_id');
        });
    }
}
