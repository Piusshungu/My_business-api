<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_productions', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('production_category')->index();
            $table->foreign('production_category')
            ->references('category')
            ->on('products');
            $table->string('product_name')->index();
            $table->foreign('product_name')
            ->references('name_of_product')
            ->on('products');
            $table->integer('number_of_products');
            $table->date('production_date');
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
        Schema::dropIfExists('daily_productions');
    }
}
