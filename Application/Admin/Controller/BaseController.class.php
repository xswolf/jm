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
            redirect(U('User/login'));
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

    public function del($id)
    {
        $table = I("table");
        if (Base::instance()->del($id, $table)) {
            $this->_success('删除成功', '/' . MODULE_NAME . '/' . CONTROLLER_NAME . '/lists');
        } else {
            $this->_error("删除失败", '/' . MODULE_NAME . '/' . CONTROLLER_NAME . '/lists');
        }
    }

    protected function _success($message, $url = '')
    {
        setcookie('message', json_encode(['status' => 1, 'message' => $message]));
        if ($url == '') {
            $url = '/' . MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME;
        }
        redirect($url);
    }

    protected function _error($message, $url = '')
    {
        setcookie('message', json_encode(['status' => 0, 'message' => $message]));
        if ($url == '') {
            $url = '/' . MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME;
        }
        redirect($url);
    }

}