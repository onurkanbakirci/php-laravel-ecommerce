<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderShipping extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_shipping', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unique();
            $table->string('shipping_first_name',255);
            $table->string('shipping_last_name',255);
            $table->string('shipping_email',255);
            $table->string('shipping_phone_number',255);
            $table->string('shipping_address_1',255);
            $table->string('shipping_address_2',255);
            $table->string('shipping_country',255);
            $table->string('shipping_state',255);
            $table->string('shipping_city',255);
            $table->string('shipping_zip_code',20);
            $table->string('billing_first_name',255);
            $table->string('billing_last_name',255);
            $table->string('billing_email',255);
            $table->string('billing_phone_number',255);
            $table->string('billing_address_1',255);
            $table->string('billing_address_2',255);
            $table->string('billing_country',255);
            $table->string('billing_state',255);
            $table->string('billing_city',255);
            $table->string('billing_zip_code',255);
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
        Schema::dropIfExists('tbl_order_shipping');
    }
}
