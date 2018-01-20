<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('restaurants', function(Blueprint $table) {
//            $table->foreign('id_User')->references('id')->on('users');
//        });
//        Schema::table('categories', function(Blueprint $table) {
//            $table->foreign('id_restaurant')->references('id')->on('restaurants');
//        });
//        Schema::table('meals', function(Blueprint $table) {
//            $table->foreign('id_promotion')->references('id')->on('promotions');
//        });
//        Schema::table('meals', function(Blueprint $table) {
//            $table->foreign('id_category')->references('id')->on('categories');
//        });
//        Schema::table('devices', function(Blueprint $table) {
//            $table->foreign('id_restaurant')->references('id')->on('restaurants');
//        });
//        Schema::table('devices', function(Blueprint $table) {
//            $table->foreign('id_employee')->references('id')->on('employees');
//        });
//        Schema::table('employees', function(Blueprint $table) {
//            $table->foreign('id_restaurant')->references('id')->on('restaurants');
//        });
//        Schema::table('instance__devices', function(Blueprint $table) {
//            $table->foreign('id_user')->references('id')->on('users');
//        });
//        Schema::table('instance__devices', function(Blueprint $table) {
//            $table->foreign('id_device')->references('id')->on('devices');
//        });
//        Schema::table('orders', function(Blueprint $table) {
//            $table->foreign('id_instance')->references('id')->on('instance__devices');
//        });
//        Schema::table('orders', function(Blueprint $table) {
//            $table->foreign('id_device')->references('id')->on('devices');
//        });
//        Schema::table('histories', function(Blueprint $table) {
//            $table->foreign('id_user')->references('id')->on('users');
//        });
//        Schema::table('histories', function(Blueprint $table) {
//            $table->foreign('id_restaurant')->references('id')->on('restaurants');
//        });
//        Schema::table('histories', function(Blueprint $table) {
//            $table->foreign('id_order')->references('id')->on('orders');
//        });
//        Schema::table('commandes', function(Blueprint $table) {
//            $table->foreign('id_order')->references('id')->on('orders');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
