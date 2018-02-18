<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_user')->unsigned()->nullable();
            $table->integer('id_restaurant')->unsigned()->nullable();
            $table->integer('id_order')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_restaurant')->references('id')->on('restaurants');
            $table->foreign('id_order')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
