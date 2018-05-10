<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->nullable();
            $table->boolean('active')->default(1);
            $table->string('name_ar');
            $table->string('name_en');
            $table->boolean('home_delivery_availability')->default(0);
            $table->boolean('shipment_availability')->default(0);
            $table->boolean('on_sale')->default(0);
            $table->boolean('on_sale_on_homepage')->default(0);
            $table->boolean('on_homepage')->default(0);
            $table->decimal('price',6,2)->unsigned();
            $table->float('weight',3,2)->unsigned();
            $table->decimal('sale_price',6,2)->unsigned()->nullable();
            $table->decimal('home_delivery_fees',3,2)->unsigned()->nullable(0);
            $table->string('size_chart_image')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('notes_ar')->nullable();
            $table->text('notes_en')->nullable();
            $table->string('image');

            $table->timestamp('start_sale')->nullable();
            $table->timestamp('end_sale')->nullable();

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
        Schema::drop('products');
    }
}
