<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArea2019098 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_areas', function (Blueprint $table) {
            $table->increments('ar_id');
            $table->string('ar_name');
            $table->unsignedInteger('dis_id')->nullable();
            $table->foreign('dis_id')->references('dis_id')->on('tbl_districts');
            $table->softDeletes();
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
        Schema::dropIfExists('tbl_areas');
    }
}
