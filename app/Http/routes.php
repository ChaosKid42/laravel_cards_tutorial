<?php


Route::get('/', function () {

		return redirect('cards');

	}
);

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards', 'CardsController@store');


Route::post('cards/{card}/notes', 'NotesController@store');


Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');