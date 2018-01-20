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
        // Schema::table('product_blanks', function($table)
        // {
        //     $table->renameColumn('blanks_id', 'id');
        // });

        // Schema::table('product_details', function($table)
        // {
        //     $table->renameColumn('p_details_id', 'id');
        // });

        // Schema::table('products', function($table)
        // {
        //     // $table->renameColumn('product_id', 'id');

        // });

        Schema::table('order_details', function($table)
        {
            $table->renameColumn('details_id', 'id');

        });

        Schema::table('orders', function($table)
        {
            $table->renameColumn('order_id', 'id');

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
