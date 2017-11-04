<?php

Route::get('edc', 'EasyDevelopmentCommandsController@index')->name('command-index');
Route::post('edc/run-command', 'EasyDevelopmentCommandsController@runCommand')->name('command-run');



