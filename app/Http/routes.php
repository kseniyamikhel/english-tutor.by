<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', ['as' => 'main', 'uses' =>'IndexController@index']);

    Route::get('about', ['as' => 'about', 'uses' =>'AboutController@index']);

    Route::get('news', ['as' => 'news', 'uses' =>'NewsController@index']);
    Route::get('news/{slug}', ['as' => 'singleNews', 'uses' =>'NewsController@showSingleNews']);

    Route::get('testlevel', ['as' => 'testLevel', 'uses' =>'TestLevelController@index']);
    Route::get('question/{id}', ['as' => 'question', 'uses' =>'TestLevelController@question']);
    Route::post('answer/{id}', ['as' => 'answer', 'uses' =>'TestLevelController@answer']);
    Route::get('result', ['as' => 'result', 'uses' =>'TestLevelController@result']);

    Route::get('se/beginner', ['as' => 'seBeginner', 'uses' =>'SEController@beginner']);
    Route::get('se/elementary', ['as' => 'seElementary', 'uses' =>'SEController@elementary']);
    Route::get('se/intermidiate', ['as' => 'seIntermidiate', 'uses' =>'SEController@intermidiate']);

    Route::get('levels/beginner', ['as' => 'levelBeginner', 'uses' => 'LevelBeginnerController@index']);
    Route::get('levels/beginner/pronunciation', ['as' => 'levelBeginnerPronunciation', 'uses' => 'LevelBeginnerController@pronunciation']);
    Route::get('levels/elementary', ['as' => 'levelElementary', 'uses' => 'LevelElementaryController@index']);
    Route::get('levels/intermediate', ['as' => 'levelIntermediate', 'uses' => 'LevelIntermidiateController@index']);

    Route::get('video', ['as' => 'video', 'uses' =>'VideoController@index']);
    Route::get('audio', ['as' => 'audio', 'uses' => 'AudioController@index']);

    Route::post('form', ['as' => 'form', 'uses' => 'FormController@index']);

    Route::get('albums', ['as' => 'albums', 'uses' => 'AlbumController@index']);

    Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
    Route::get('create_news', ['as' => 'showFormNews', 'uses' => 'AdminController@showFormNews']);
    Route::post('createNews', ['as' => 'createNews', 'uses' => 'AdminController@createNews']);
});