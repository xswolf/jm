<?php
namespace Admin\Logic;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/4
 * Time: 13:13
 */
class User extends Base
{
    protected $user;

    public function getUserId(){
        return $this->user['id'];
    }

    public function setUser($userInfo){
        $this->user = $userInfo;
    }

    public function getUser(){
        return $this->user;
    }

    public function login($username){

        $this->user = M('admin')->where(['username'=>$username])->find();
        session( C('LOGIN_INFO') , $this->user );
        return $this->user;
    }
}