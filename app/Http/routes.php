<?php

//Route::controller('upload', 'UploadController');
Route::get('p/{id}', 'PhotoController@getPhoto');
Route::controller('/', 'HomepageController');
