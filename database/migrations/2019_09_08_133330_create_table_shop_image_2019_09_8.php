<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShopImage2019098 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shop_images', function (Blueprint $table) {
            $table->increments('shop_image_id');
            $table->string('image_name')->nullable();
            $table->string('path')->nullable();
            $table->unsignedInteger('shop_post_id');
            $table->foreign('shop_post_id')
                ->references('shop_post_id')->on('tbl_shop_posts');
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
        Schema::dropIfExists('tbl_shop_images');
    }
}
