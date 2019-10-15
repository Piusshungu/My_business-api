<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('product_name')->index();
            $table->foreign('product_name')
            ->references('id')
            ->on('products');
            $table->integer('number_of_product');
            $table->string('product_category')->index();
            $table->foreign('product_category')
            ->references('category')
            ->on('products');
            $table->integer('total_amount');
            $table->date('date_of_sales');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
