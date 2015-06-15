<?php
/*
 * Blog controller route
 */
get('/', ['as' => 'blog.main', 'uses' => 'BlogController@index']);
get('blog/show/{id}', ['as'=>'blog.show', 'uses'=>'BlogController@show']);

get('model', 'TestController@model');
post('create', 'TestController@store');
get('hello-world-index', 'TestController@index');