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
            'playerOne_id' => 1,
            'playerTwo_id' => 2
        ]);
    }
}
