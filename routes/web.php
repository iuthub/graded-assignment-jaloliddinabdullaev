<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [
	'uses' => 'PostsController@getUserIndex',
	'as' => 'userIndex'
]);
Route::group([
	'prefix'=>'users'
], function(){

	Route::get('/', [
		'uses' => 'PostsController@getUserIndex',
		'as'=> 'userIndex'
	]);
	
	Route::get('/create', [
		'uses' => 'PostsController@getUserCreate',
		'as' => 'userCreate'
	]);

	Route::post('/create', [
		'uses' => 'PostsController@postUserCreate',
		'as' => 'userCreatePost'
	]);

	Route::get('/edit/{id}', [
		'uses' => 'PostsController@getUserEdit',
		'as' => 'userEdit'
	]);


	Route::post('/edit', [
		'uses' => 'PostsController@postUserEdit',
		'as' => 'userEditPost'
	]);
	
	Route::get('/delete/{id}', [
		'uses' => 'PostsController@getUserDelete',
		'as' => 'userDelete'
	]);

	Route::get('/{id}', [
		'uses' => 'PostsController@getUserPost',
		'as' => 'userPost'
	]);

	Route::get('/{title}', [
		'uses' => 'PostsController@getUserPostByTitle',
		'as' => 'userPostByTitle'
	]);
			
});