<?php

Route::get('/db{type}', ['as' => 'setdb' ,
	function($type){
	Session::put('dbtype',$type);
	return Redirect::route('bookmark.index');
}]);

App::bind('HomeController', function(){
	$dbtype = 'Mongo';
	if(Session::has('dbtype'))
		$dbtype = Session::get('dbtype');
	else
		Session::put('dbtype',$dbtype);

	$DB = 'Bookmark'.$dbtype;
	$RepoType = new Bookmark(new $DB);
	return new HomeController($RepoType);
});

Route::resource('bookmark', 'HomeController');
Route::get('/','HomeController@index');
Route::get('/bookmark/{id}/delete',[ 'uses'=>'HomeController@destroy','as' => 'bookmark.delete' ]);
Route::get('/bookmark/{id}/rate/{rate}',[ 'uses'=>'HomeController@rate','as' => 'bookmark.rate' ]);