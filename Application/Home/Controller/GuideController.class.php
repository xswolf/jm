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
        $lists = News::instance()->lists('news',array('status'=>1,'news_type_id'=>8),0,4);
        $this->assign('lists', $lists);
        $this->display();
    }

    public function details($id=''){
        if(!$id) {
            $this->error('参数错误','/Home/Guide/doctor');
        }
        $newsInfo = News::instance()->get($id,'news');
        $lists = News::instance()->lists('news',array('status'=>1,'news_type_id'=>$newsInfo['news_type_id']));
        $count = count($lists);
        foreach($lists as $k => $v) {
            if($v['id'] == $id) {
                $newsK = $k;
            }
        }
        //计算上一页
        $prevId = null;
        if(($newsK-1) >= 0) {
            $prevId = $lists[$newsK-1]['id'];
        }
        //计算下一页
        $nextId = null;
        if(($newsK+1) <= $count) {
            $nextId = $lists[$newsK+1]['id'];
        }
        $this->assign('newsInfo', $newsInfo);
        $this->assign('prevId', $prevId);
        $this->assign('nextId', $nextId);
        $this->display();
    }
}