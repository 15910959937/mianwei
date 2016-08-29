<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

header('content-type:text/html;charset=UTF-8');
class OtherController extends Controller
{
    //首页展示
    public function other_function(){
    	return view('map/other_function');
    }

    //手机地图
    public function compamy_map(){
        $url = "http://api.map.baidu.com/place/v2/search?query=麻辣烫&page_size=10&page_num=0&scope=1&location=39.915,116.404&radius=2000&output=json&ak=nXezGCeI80ZZK2IsGWDWPMgS";
        $res = file_get_contents($url);
        $arr = json_decode($res,true);
        return view('map/list_map',['arr' => $arr]);
    }

    //进入公司地图查看详情
    public function in_map(){
        $address = Input::get('company');
        return view("map/map_details");
    }
}


