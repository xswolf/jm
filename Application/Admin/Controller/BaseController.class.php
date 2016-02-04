<?php
namespace Admin\Controller;

use Admin\Logic\User;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/4
 * Time: 13:05
 */
class BaseController extends \Think\Controller
{
    /**
     * @var User
     */
    protected $userInfo;

    public function _initialize()
    {
        if (!$this->isLogin()) {
            redirect(U('User/Login'));
        }
    }

    /**
     * 判断用户是否登录
     * @return User
     */
    public function isLogin()
    {
        $loginInfo = session(C('LOGIN_INFO'));
        if ($loginInfo) {
            $user = new User();
            $user->setUser($loginInfo);
            $this->userInfo = $user;
        }
        return $this->userInfo;
    }
}