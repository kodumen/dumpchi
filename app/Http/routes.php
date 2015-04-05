<?php

//Route::controller('upload', 'UploadController');
Route::controller('/', 'HomepageController');
Route::get('p/{id}', 'PhotoController@getPhoto');