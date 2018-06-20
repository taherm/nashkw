<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->default(0)->index();
            $table->string('name_ar');
            $table->string('name_en');
            $table->mediumText('description_en')->nullable();
            $table->mediumText('description_ar')->nullable();
            $table->string('image')->nullable();
            $table->boolean('limited')->default(0);
            $table->integer('order')->nullable();
            $table->boolean('is_home')->default(0);
            $table->boolean('active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void'
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
