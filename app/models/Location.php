<?php

use Eloquent;

class Location extends Eloquent {

	protected $fillable = [];

    public function game()
    {
        return $this->belongsTo('Game');
    }

    public function guy()
    {
        return $this->hasOne('Guy');
    }
}