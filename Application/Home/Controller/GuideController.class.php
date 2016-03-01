<?php
namespace Home\Controller;

use Admin\Logic\News;

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
        $lists = News::instance()->lists('news',array('status'=>1,'news_type_id'=>6),0,4);
        $this->assign('lists', $lists);
        $this->display();
    }

    public function details(){
        $this->display();
    }
}