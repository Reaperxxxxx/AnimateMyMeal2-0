<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('comment') ;
            $table->string('type') ;
            $table->integer('note') ;
            $table->integer('id_rated') ;
            $table->integer('id_User')->unsigned();
            $table->foreign('id_User')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
