<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name') ;
            $table->string('asset_link')->nullable() ;
            $table->float('price')->nullable() ;
            $table->string('image1')->nullable() ;
            $table->string('image2')->nullable() ;
            $table->string('image3')->nullable() ;
            $table->string('image4')->nullable() ;
            $table->text('description');
          //  $table->integer('id_User')->unsigned();
           // $table->foreign('id_User')->references('id')->on('users');
           // $table->integer('id_Category')->unsigned();
            //$table->foreign('id_Category')->references('id')->on('category_assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
