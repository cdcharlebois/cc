<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Game extends Eloquent {

	protected $fillable = ['playerOne_id', 'playerTwo_id'];

    public function playerOne()
    {
        return $this->belongsTo('Player', 'playerOne_id');
    }
    public function playerTwo()
    {
        return $this->belongsTo('Player', 'playerTwo_id');
    }
}