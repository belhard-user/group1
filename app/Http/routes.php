<?php
use App\Http\Requests;
/*
 * Blog controller route
 */
get('/', function(){
    dd(\App\Post::find(16)->tags->toArray());
    return view('welcome');
});

/*get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
get('blog/show/{id}', ['middleware' => 'admin', 'as'=>'blog.show', 'uses'=>'BlogController@show']);
get('blog/create', ['as'=>'blog.create', 'uses'=>'BlogController@create']);
post('blog/store', ['as'=>'blog.store', 'uses'=>'BlogController@store']);*/

Route::resource('blog', 'BlogController');

/*get('model', 'TestController@model');
get('valid', 'TestController@valid');
post('create', 'TestController@store');
get('hello-world-index', 'TestController@index');*/

Route::controllers([
    'auth' => 'Auth\AuthController'
]);
/*test routes*/
/*get('form', function(){
    return view('form');
});
post('store', function(App\Http\Requests\TestRequest $request){
    dd($request->all());
});*/