<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImage2019098 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_images', function (Blueprint $table) {
            $table->increments('user_image_id');
            $table->string('image_name')->nullable();
            $table->string('path')->nullable();
            $table->unsignedInteger('user_post_id');
            $table->foreign('user_post_id')
                ->references('user_post_id')->on('tbl_user_posts');
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
        Schema::dropIfExists('tbl_images');
    }
}
