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
//use Illuminate\Support\Facades\Input;

Route::any('info',"IndexController@index");
Route::any('/',"weixinController@index");
Route::get('shiti',"weixinController@shiti");
Route::any('shiti1',"weixinController@shiti1");
Route::any('collage',"weixinController@collage");

//Route::get('/',function(){
//    return Input::get('name');
//});
Route::get('from',function(){
    return view('form');
});
Route::get('email',"IndexController@email");
