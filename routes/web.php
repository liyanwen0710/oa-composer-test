<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('oa-composer-test.home');