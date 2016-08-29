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

/*
 *时庆庆
 *2016-08-29
 *其他功能路由
 */
//首页跳转
Route::get('other_function',"OtherController@other_function");
//手机地图
Route::get('compamy_map',"OtherController@compamy_map");
//进入公司地图
Route::get("in_map","OtherController@in_map");


Route::get('from',function(){
    return view('form');
});
Route::get('email',"IndexController@email");
