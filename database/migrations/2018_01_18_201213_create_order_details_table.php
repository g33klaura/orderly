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
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            // Order details id (is the foreign key on orders table)

            $table->timestamps();

            $table->string('design_name', 100);
            // Design Name

            $table->integer('product_id')->unsigned();
            // Foreign key column (from Products table)

            $table->string('department', 80);
            // Department

            $table->string('graphic_size', 80);
            // Graphic Size

            $table->string('graphic_placement', 100);
            // Placement

            $table->string('blank_name', 140);
            // Blank Name

            $table->string('blank_color', 80);
            // Blank Color

            $table->string('ink_colors', 80);
            // Ink Colors

            $table->string('ink_type', 40);
            // Ink Type*****

            $table->smallInteger('qty_xsmall');
            // Qty-XSmall

            $table->smallInteger('qty_small');
            // Qty-Small

            $table->smallInteger('qty_medium');
            // Qty-Medium

            $table->smallInteger('qty_large');
            // Qty-Large

            $table->smallInteger('qty_xlarge');
            // Qty-XLarge

            $table->smallInteger('qty_2xlarge');
            // Qty-2XLarge

            $table->smallInteger('qty_3xlarge');
            // Qty-3XLarge

            $table->integer('qty_total_row');
            // Total Qty ***but of just whatever product type this row is, or TOTAL order qty? (below) 
            $table->integer('qty_all_total');
            // which number will help designate tiers....

            $table->decimal('design_cost', 8, 2);
            // Design cost aka Product cost

            $table->text('detail_notes');
            // Notes/Comments

            
            // ******How can several rows of date be tied to ONE actual order???? (several products data will tie into here as one order)
        });

        Schema::table('order_details', function($table) {
            $table->foreign('product_id')->references('id')->on('products');
            // Product id (foreign key from Products)
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
