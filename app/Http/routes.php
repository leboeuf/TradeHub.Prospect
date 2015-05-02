<?php

Route::get('/', 'HomeController@index');

Route::get('ajax/{query}', 'AjaxController@show');
