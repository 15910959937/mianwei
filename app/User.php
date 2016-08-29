<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
header('content-type:text/html;charset=UTF-8');
class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //指定表名
    protected $table='users';
    //指定主键
    protected $primaryKey='id';

    //设置可以操作的字段一般都可以操作
   /* protected $fillable = [
        'name', 'email', 'password',
    ];*/

    //设置被保护字段不可以被重写
    protected $guarded=['id'];
/********************************************   查询   ************************************************************/
    //查询所有
    public function select_all(){
       return $this->all();
    }
    //查询一条
    public function select_one(){
        return $this->find(1);//这里填写主键字段的值
//        如果查询结果为空就报错
//        return $this->findOrFail(1);//查询不到结果就报错
    }
    //待条件查询
    public function select_where($where){
        return $this->where($where)->get();
    }
    /********************************************   添加   ************************************************************/
//添加数据
    public $timestamps= false;//关掉这两个字段
    public function userAdd(){
        $this->username='张三';
        $this->status='18';
        $re=$this->save();
        return $re;
    }
//添加数组
    public function add_array(){
        $user=array('username'=>'小山','password'=>'128320','status'=>1,'session_id'=>'1646456415274891');
        $this->fill($user);
        $re=$this->save();
        return $re;
    }
    /********************************************   修改   ************************************************************/
    //修改数据(单条)
    public function updateUser(){
        $user=$this->find(3);
//        print_r($user);die;
        $user->username='张三1';
        $user->status="2";
        $re=$user->save();
        return $re;
    }
    //修改数据（批量）
    public function update_array(){
        $users=$this->where('id','>','1');
        $re=$users->update(['username'=>'小山','password'=>'128320','status'=>1,'session_id'=>'1646456415274891']);
        return $re;
    }
 /********************************************   删除   ************************************************************/
   //删除
    public  function userDelete(){
        $user=$this->find(13);
        $re=$user->delete();
        return $re;
    }
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
