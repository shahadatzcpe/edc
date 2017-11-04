<?php

Route::group(['namespace'=> 'Shahadat\Edc'],function(){
	Route::get('edc', 'Controller@index')->name('command-index');
	Route::post('edc/run-command', 'Controller@runCommand')->name('command-run');
});

