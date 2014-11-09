<?php

Route::resource('projects', 'ProjectController');

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('login', array('uses' => 'HomeController@showLogin'));

Route::post('login', array('uses' => 'HomeController@doLogin'));