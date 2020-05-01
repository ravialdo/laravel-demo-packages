<?php
Route::get('demo', function(){
	return "Hii, ini demo package";
});

Route::get('demo-view', function(){
     return view('demo::index');
});

Route::get('demo/{nama}', 'Ravialdo\DemoPackage\DemoController@demo');