<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('guys', function($table){
            $table->increments('id');
            $table->integer('dSpeed');
            $table->integer('pSpeed');
            $table->integer('capacity');
            $table->integer('player_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('location_id')->references('id')->on('location');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::dropIfExists('guys');
	}

}
