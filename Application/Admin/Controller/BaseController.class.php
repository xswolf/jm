<?php
namespace Admin\Controller;

use Admin\Logic\Base;
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

    public function del($id){
        $table = I("table");
        if (Base::instance()->del($id ,$table)){
            $this->ajaxReturn(1);
        } else {
            $this->ajaxReturn(0);
        }
    }

    protected function _success($message  , $url = ''){
        setcookie('message' , json_encode(['status'=>1,'message'=>$message] ) );
        if ($url == ''){
            $url = '/'.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        }
        redirect($url);
    }

    protected function _error($message  , $url = ''){
        setcookie('message' , json_encode(['status'=>0,'message'=>$message] ) );
        if ($url == ''){
            $url = '/'.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        }
        redirect($url);
    }

}