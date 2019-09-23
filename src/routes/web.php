<?php
Route::group(['prefix' => 'admin'],function(){
    // contact
    Route::get('/','Ngant\Admin_package\Controllers\AdminController@index');
});
