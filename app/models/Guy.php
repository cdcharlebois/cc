<?php

use Eloquent;

class Guy extends Eloquent {

	protected $fillable = [];

    public function location()
    {
        return $this->belongsTo('Location');
    }

    public function player()
    {
        return $this->belongsTo('Guy');
    }
}