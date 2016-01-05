<?php


// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('profile', 'PagesController@profile');
Route::get('contact', 'PagesController@contact');

Route::resource('articles.comments', 'ArticlesCommentsController');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::delete('articles/{id}', ['as'=>'articles.destroy', 'uses'=>'ArticlesController@delete']);
Route::post('articles', 'ArticlesController@store');

Route::resource('category', 'CategoryController');

Route::resource('questions.answers', 'QuestionsAnswersController');
Route::get('questions', 'QuestionsController@index');
Route::get('questions/create', 'QuestionsController@create');
Route::get('questions/{id}', 'QuestionsController@show');
Route::post('questions', 'QuestionsController@store');

Route::resource('opportunity', 'OpportunityController');
