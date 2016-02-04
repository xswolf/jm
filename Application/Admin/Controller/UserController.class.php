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
     * @param $username
     * @param $password
     */
    public function login($username = '', $password = ''){
        if ($_POST) {
            $user = new User();
            $userInfo = $user->login($username , $password);
            if ($userInfo['password'] === $password) {
                // 登录成功
            } else {
                // 登录失败
            }
        }
        $this->display();
    }

    /**
     * 用户退出
     */
    public function loginOut(){

    }

}