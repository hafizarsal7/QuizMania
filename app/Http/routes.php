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

Route::get('/admin/dashboard', function(){
	?>
	<script type="text/javascript">
    		alert('You should be login first')
    		window.location="/admin/login"
    		</script>
    		<?php 
});



Route::post('/admin/dashboard','AdminController@index');

Route::get('/admin/logout', function(){
	return view('admin.welcome');
});
