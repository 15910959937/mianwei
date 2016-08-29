<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

header('content-type:text/html;charset=UTF-8');
class weixinController extends Controller
{
    //首页展示
    function index(){
    	return view('weixin/index');
    }

    //学院展示
    function collage(){
    	$url  ="http://www.daiqingqing.site/api/collage.php";
        // print_r($url);die;
    	$menu =file_get_contents($url);
// print_r($menu);die;
    	$menu=json_decode($menu,true);
    	if($menu['success']==1){
    		return view('weixin/collage',['menu'=>$menu['message']]);	
	    }else{
	    	echo "<script>alert('查询错误');window.history.go(-1)</script>";
	    } 
    }
    //查找试题和专业
    function shiti(Request $request){
    	$re=$request->get('id');
    	$id=$this->encrypt($re,"chen");
    	// var_dump($id);die;
    	$url="http://www.daiqingqing.site/api/zhuanye.php?id=$id";
    	$zhuanye=file_get_contents("$url");
    	$zhuanye=json_decode($zhuanye,true);
    	if($zhuanye['success']==1){
    		return view('weixin/shiti',['message'=>$zhuanye['message']]);	
	    }else{
	    	echo "<script>alert('查询错误');window.history.go(-1)</script>";
	    }  	
    }

    //查找某专业和某类型的试题
    function shiti1(Request $request){
    	$re=$request->all();
    	// print_r($re);die;
    	$zhuanye=$re['zhuanye'];
    	$type=$re['type'];
        //给专业和类型加密
    	$zhuanye=$this->encrypt($re['zhuanye'],"chen");
        $type=$this->encrypt($re['type'],"chen");

        //请求接口调用数据
    	$url="http://www.daiqingqing.site/api/type-zhuanye.php?zhuanye=$zhuanye&type=$type";
        // print_r($url);die;
    	$shiti=file_get_contents($url);
        // print_r($shiti);die;
    	$shiti=json_decode($shiti,true);
        // dd($shiti);die;
    	if($shiti['shiti']==array('')){
            return view('weixin/shiti-tihuan')->with('shiti','');
	    }else{
	        return view('weixin/shiti-tihuan')->with('shiti',$shiti['shiti']);
           
	    } 
    }

    function encrypt($data, $key) {
		$prep_code = serialize($data);
		$block = mcrypt_get_block_size('des', 'ecb');
		if (($pad = $block - (strlen($prep_code) % $block)) < $block) {
		$prep_code .= str_repeat(chr($pad), $pad);
		}
		$encrypt = mcrypt_encrypt(MCRYPT_DES, $key, $prep_code, MCRYPT_MODE_ECB);
        $encrypt= base64_encode($encrypt);
        $encrypt= str_replace('+','_',$encrypt);
        return $encrypt;
	}
}
