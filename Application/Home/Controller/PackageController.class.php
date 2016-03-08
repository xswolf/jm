<?php
namespace Home\Controller;

class PackageController extends BaseController {

    public function _initialize()
    {
        parent::_initialize();
        $this->assign('leftUrl',ACTION_NAME);
    }

    public function index(){
        $this->display();
    }

    public function ordinary(){
        $this->display();
    }

    public function big(){
        $this->display();
    }

    public function vip(){
        $this->display();
    }
}