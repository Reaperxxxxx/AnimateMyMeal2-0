<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstanceDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instance__devices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_user')->unsigned()->nullable();
            $table->integer('id_device')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_device')->references('id')->on('devices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instance__devices');
    }
}
