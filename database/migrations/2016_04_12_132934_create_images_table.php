<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_main')->default(0);
            $table->integer('gallery_id')->unsigned()->index();
            $table->string('thumb_url');
            $table->string('medium_url');
            $table->string('large_url');
            $table->string('caption_ar')->nullable();
            $table->string('caption_en')->nullable();
            $table->integer('order')->nullable();

            $table->foreign('gallery_id')->references('id')->on('galleries')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('images');
    }
}
