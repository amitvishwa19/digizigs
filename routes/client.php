<?php

Route::get('/',[
   'uses' => 'Client\ClientController@home',
   'as' =>'app.home'
]);


Route::get('/blogs',[
   'uses' => 'Client\ClientController@blogs',
   'as' =>'app.blogs'
]);

Route::get('/contact',[
   'uses' => 'Client\ClientController@contact',
   'as' =>'app.contact'
]);

Route::get('/about',[
   'uses' => 'Client\ClientController@about',
   'as' =>'app.about'
]);