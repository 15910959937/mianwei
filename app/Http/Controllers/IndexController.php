<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\RedirectResponse as redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\Request;

use Cache,Mail;
header('content-type:text/html;charset=UTF-8');
class IndexController extends Controller
{
    function index(){


       dd(Session::all()) ;die;
//        $post=Input::post();
//        $post=Request::all();
//        print_r($post);die;
//        $re="你好";
//        $re=INPUT_GET('name');
//        print_r($re);die;
//       $arr=['one','two','three'];
//        $array=collect($arr);
//        dd($array);
//
//        $users=new User();
//        添加数据挨个添加
//        $users->userAdd();
//        添加数组
//        $users->add_array();
        //修改
//    $users->updateUser();
//        $users->update_array();
//        return $users->select_where(['username'=>"陈学卫"]);die;
        //获取一张表中的数据不用select
//        Cache::increment('key', 123);
//        print_r(Cache::get('key'));die;

//        $users = DB::select('select * from students');//执行原生的sql语句
//    $users= get_object_vars($users);
//       $users=DB::table('students')->where('age','18')->first();//查出一条符合条件的数据
//       $users= DB::table('students')->lists('age');//查出数据库中的某一列

        //用select进行查询
//        $users= DB::table('students')->select('*')->get();//查询所有
//          $users= DB::table('students')->select('*')->distinct()->get();//查询所有
        //join的用法
//        $users = DB::table('students')
//            ->join('book', 'students.id', '=', 'book.user')
//            ->select('*')
//            ->get();

//        //联合查询
//        $first = DB::table('students')
//            ->where('username','小红');
//
//        $users = DB::table('students')
//            ->where('age','18')
//            ->union($first)
//            ->get();
//        print_r($users);die;

//        return redirect()->action('IndexController@info');
//        return redirect()->action('IndexController@form');
//    return "你好";
        return view('welcome',['re'=>$re]);
    }

    function info(){
        return "nihao";
    }
    function froms(){
        echo "表单123";
    }

    function email()
    {
        $re=Mail::raw('这是一封测试邮件', function ($message) {
            $to = '297973528@qq.com';
            $message ->to($to)->subject('测试邮件');
        });
        if($re==1){
            echo "发送成功";
        }else{
            echo "发送失败";
        }
    }

}