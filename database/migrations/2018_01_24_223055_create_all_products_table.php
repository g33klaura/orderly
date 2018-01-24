<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();

                // fields in csv
            // design name
            $table->string('product_name', 100);

            // department
            $table->string('department', 80);

            // screen size
            $table->string('graphic_size', 80);

            // placement
            $table->string('graphic_placement', 100);

            // product type
            $table->string('product_type', 100);

            // blank name
            $table->string('blank_name', 100);

            // blank color
            $table->string('blank_color', 80);

            // ink colors
            $table->string('ink_colors', 80);

            // ink type
            $table->string('ink_type', 40);

            // pos alias/ inventory alias
            $table->string('pos_alias', 80);

            // cost
            $table->decimal('cost', 8, 2);

            // pos id/ inventory id
            $table->string('pos_id', 40);

            // shouldn't need a foreign key b/c these details will be "copied" or "dragged" to an order when being built
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_products');
    }
}
