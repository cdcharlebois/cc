<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('games', function($table){
            $table->increments('id');
            $table->integer('playerOne_id')->unsigned();
            $table->integer('playerTwo_id')->unsigned();
            $table->timestamps();

            $table->foreign('playerOne_id')->references('id')->on('players');
            $table->foreign('playerTwo_id')->references('id')->on('players');
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
        Schema::dropIfExists('games');
	}

}
