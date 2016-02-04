<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/4
 * Time: 13:11
 */

namespace Admin\Controller;


use Admin\Logic\User;
use Think\Controller;

class UserController extends Controller
{
    /**
     * 用户登录
     */
    public function login(){
        //判断否非已经登陆
        if(session(C('LOGIN_INFO'))) {
            $this->redirect('Admin/Index/index');
        }
        //登录判断
        if ($_POST) {
            $user = new User();
            $username = I('user_name');
            $password = I('user_pass');
            $userInfo = $user->login($username);
            if ($userInfo['password'] === md5($password) ) {
                // 登录成功
                $this->redirect('Admin/Index/index');
            } else {
                // 登录失败
                session(C('LOGIN_INFO'),null);//删除登录信息
                $this->error('登录失败!');
            }
        }
        $this->display();
    }

    /**
     * 用户退出
     */
    public function loginOut(){
        session(C('LOGIN_INFO'),null);//删除用户信息
        $this->redirect('Admin/User/Login');//返回至登录页面
    }

}