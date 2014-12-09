<?php

/**/

Route::get('/', function(){
	return View::make('home');
});

Route::get('/pee', 'PeeController@index');