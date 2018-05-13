<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->enum('status', ['pending', 'success', 'shipped', 'completed', 'failed']);
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->index();
            $table->float('coupon_value')->unsigned();
            $table->decimal('shipping_cost',6,2)->unsigned();
            $table->decimal('amount',6,2)->unsigned();
            $table->decimal('sale_amount',6,2)->unsigned(); //
            $table->decimal('net_amount',6,2)->unsigned(); // used if coupon code exists
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('reference_id')->nullable()->deafult(0);
            $table->string('payment_method')->nullable();

            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
