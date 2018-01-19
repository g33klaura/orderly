<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBlanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_blanks', function (Blueprint $table) {
            $table->increments('blanks_id');
            $table->timestamps();

            $table->string('blank_name', 100);
            // blanks name

            $table->string('blank_color', 80);
            // blank color

            $table->string('blank_type', 100);
            // product type

            // Doesn't need foreign key
            // This will render in dropdown on Product Add form, then get re-saved to a Product
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_blanks');
    }
}
