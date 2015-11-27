<?php


//route to getInsert method of InsertController
Route::get('/', array('as' => 'insert','uses' => 'InsertController@getInsert'));

//route to postInsert method of InsertController
Route::post('insert', array('as' => '/insert','uses' => 'InsertController@postInsert'));

//route to getSearch method of SearchController
Route::get('/search', array('as' => 'search','uses' => 'SearchController@getSearch'));

//route to executeSearch method of SearchController
Route::post('search', array('uses' => 'SearchController@executeSearch'));


	