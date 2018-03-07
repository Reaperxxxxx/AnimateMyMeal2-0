<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ;
            $table->text('description');
            $table->float('price') ;
            $table->string('img_url')->nullable() ;
            $table->integer('preparation_time_min')->nullable();
            $table->timestamps();
            $table->integer('id_promotion')->unsigned()->nullable();
            $table->foreign('id_promotion')->references('id')->on('promotions');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
