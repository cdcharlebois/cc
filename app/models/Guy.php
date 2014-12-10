<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Guy extends Eloquent {

	protected $fillable = ['dSpeed','pSpeed', 'capacity', 'player_id', 'location_id'];

    public function location()
    {
        return $this->belongsTo('Location');
    }

    public function player()
    {
        return $this->belongsTo('Guy');
    }
}