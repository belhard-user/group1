<?php
/*
 * Blog controller route
 */
get('/', function(){
    return view('welcome');
});

get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
get('blog/show/{id}', ['as'=>'blog.show', 'uses'=>'BlogController@show']);
get('blog/create', ['as'=>'blog.create', 'uses'=>'BlogController@create']);
post('blog/store', ['as'=>'blog.store', 'uses'=>'BlogController@store']);

get('model', 'TestController@model');
get('valid', 'TestController@valid');
post('create', 'TestController@store');
get('hello-world-index', 'TestController@index');