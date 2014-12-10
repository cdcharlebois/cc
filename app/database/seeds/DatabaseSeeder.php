<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//		Eloquent::unguard();
        $this->call('PlayerTableSeeder');
        $this->call('GameTableSeeder');
        $this->call('LocationTableSeeder');
        $this->call('GuyTableSeeder');
		// $this->call('UserTableSeeder');
	}
}

class PlayerTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('players')->delete();
        Player::create([
            'username' => 'conner',
            'email'    => 'cdcharlebois@gmail.com'
        ]);
        Player::create([
            'username' => 'chuck',
            'email'    => 'conner@charlebo.is'
        ]);
    }
}

class GameTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('games')->delete();
        Game::create([
            'playerOne_id' => Player::whereUsername('conner')->get()->first()->id,
            'playerTwo_id' => Player::whereUsername('chuck')->get()->first()->id
        ]);
    }
}

class LocationTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('locations')->delete();
        for ($i = 0; $i < 8; $i++){
            Location::create([
                'type'    => 'bar',
                'number'  => $i,
                'game_id' => Game::all()[0]->id
            ]);
        }
        for ($i = 0; $i < 6; $i++) {
            Location::create([
                'type' => 'bathroom',
                'number' => $i,
                'game_id' => Game::all()[0]->id
            ]);
        }
    }
}

class GuyTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('guys')->delete();
        for ($i = 0; $i < 8; $i++){
            Guy::create([
                'capacity' => 0, //random number between 6 and 10
                'dSpeed' => 0, //random number between 1 and capacity
                'pSpeed' => 0, //random number between 1 and capacity
                'player_id' => ($i % 2 == 0) ? Player::all()[0]->id : Player::all()[0]->id,
                'location_id' => Location::find($i+1)->id //this is bullshit.
            ]);
        }
    }
}
