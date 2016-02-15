<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {

    public function _initialize()
    {
        $this->assign('actUrl',CONTROLLER_NAME);
    }
}