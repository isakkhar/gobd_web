<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name',100);
            $table->string('priority',100);
            $table->string('order_status',100);
            $table->string('office',100);
            $table->string('payment_type',100);
            $table->double('product_weight', 15, 3);
            $table->integer('product_quantity');
            $table->string('customer_name', 100);
            $table->integer('customer_phone');
            $table->integer('approved')->default(0);
            $table->string('customer_address',100);
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
        Schema::dropIfExists('orders');
    }
}
