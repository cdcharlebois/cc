<?php

use Eloquent;

class Game extends Eloquent {

	protected $fillable = [];

    public function playerOne()
    {
        return $this->belongsTo('Player', 'playerOne_id');
    }
    public function playerTwo()
    {
        return $this->belongsTo('Player', 'playerTwo_id');
    }
}