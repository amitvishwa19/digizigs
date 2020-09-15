<?php

Route::get('/',[
   'uses' => 'Client\ClientController@home',
   'as' =>'app.home'
]);