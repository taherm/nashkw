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
            $table->string('name_ar');
            $table->string('name_en');
            $table->boolean('home_delivery_availability')->default(0);
            $table->boolean('shipment_availability')->default(0);
            $table->boolean('on_sale')->default(0);
            $table->boolean('on_sale_on_homepage')->default(0);
            $table->boolean('on_homepage')->default(0);
            $table->decimal('price',6,2)->unsigned();
            $table->decimal('weight',4,2)->unsigned();
            $table->decimal('sale_price',6,2)->unsigned()->nullable();
            $table->string('size_chart_image')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('notes_ar')->nullable();
            $table->text('notes_en')->nullable();
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();

            $table->timestamp('start_sale')->nullable();
            $table->timestamp('end_sale')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('check_stock')->default(1);
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
