<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/admin/login', 'AdminController@login');

Route::get('/admin/dashboard','AdminController@dashboard');

Route::get('/admin/user','AdminController@user');

Route::post('/admin/adduser','AdminController@adduser');

Route::post('/admin/deluser','AdminController@deleteuser');

Route::post('/admin/delete_subject','AdminController@deletesubject');

Route::get('/admin/add_user', 'AdminController@view_adduser');
Route::post('/admin/add_subject','AdminController@addsubject');
Route::get('/admin/add_subject',function(){
	return view('admin.add_subject');
});

Route::get('/admin/view_subject','AdminController@showsubjects');

Route::post('/admin/dashboard','AdminController@index');
Route::post('/admin/updateUser','AdminController@updateUser');
Route::post('/admin/updateSubject', 'AdminController@updateSubject');

Route::get('/admin/view_topic', 'AdminController@viewtopic');
Route::get('/admin/add_topic', 'AdminController@addtopic');
Route::post('/admin/add_topic','AdminController@addtopics');
Route::post('/admin/delete_topic','AdminController@deletetopic');

Route::post('/admin/updatetopic','AdminController@updatetopic');

Route::get('/admin/logout', function(){
	return view('admin.welcome');
});
