<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShopPost2019098 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shop_posts', function (Blueprint $table) {
            $table->increments('shop_post_id');
            $table->string('shop_name')->nullable();
            $table->string('location')->nullable();
            $table->string('discription')->nullable();
            $table->double('price')->nullable();
            $table->integer('phone')->nullable();
            $table->string('edition')->nullable();
            $table->unsignedInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');
            $table->unsignedInteger('model_id');
            $table->foreign('model_id')->references('model_id')->on('tbl_models');
            $table->unsignedInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('brand_id')->on('tbl_brands');
            $table->softDeletes();
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('tbl_shop_posts');
    }
}
