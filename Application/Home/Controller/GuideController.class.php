<?php
namespace Home\Controller;

class GuideController extends BaseController {

    public function _initialize()
    {
        parent::_initialize();
        $this->assign('leftUrl',ACTION_NAME);
    }

    public function index(){
        $this->display();
    }

    public function doctor(){
        $this->display();
    }

    public function details(){
        $this->display();
    }
}