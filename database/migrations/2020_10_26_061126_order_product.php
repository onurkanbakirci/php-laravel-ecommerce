<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_product', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unique();
            $table->string('buyer_type',20);
            $table->integer('product_id');
            $table->float('product_unit_price');
            $table->integer('product_quantity');
            $table->float('product_shipping_cost');
            $table->string('order_status',50);
            $table->integer('is_approved');
            $table->string('shipping_tracking_number',255);
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
        Schema::dropIfExists('tbl_order_product');
    }
}
