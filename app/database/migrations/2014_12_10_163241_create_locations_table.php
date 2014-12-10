<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('locations', function($table){
            $table->increments('id');
            $table->string('type');
            $table->integer('number');
            $table->integer('game_id')->unsigned();
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games');
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
        Schema::dropIfExists('locations');
	}

}
