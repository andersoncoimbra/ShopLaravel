<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses'=>'ProductController@getindex']);

Route::get('login', function($id =''){
    return "get id {$id}";
});

Route::group(['prefix' => 'painel', 'middleware'=>'my-middleware'], function (){

    Route::get('/', function (){
        return 'Home';
    });
    Route::get('/admin', function (){
        return 'Painel de contole';
    });
    Route::get('/user', function (){
        return 'Usuario do Sistema';
    });
});