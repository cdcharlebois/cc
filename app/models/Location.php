<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Location extends Eloquent {

	protected $fillable = ['type', 'number', 'game_id'];

    public function game()
    {
        return $this->belongsTo('Game');
    }

    public function guy()
    {
        return $this->hasOne('Guy');
    }
}