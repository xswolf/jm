<?php
namespace Home\Controller;

use Home\Model\ImagesModel;

class MessageController extends BaseController {

    public function index(){

        if(IS_POST){
            $this->ajaxReturn(ImagesModel::instance()->getList(I('page')));
        }
        $list = ImagesModel::instance()->getList(1);
        $this->assign('list',$list);
        $this->display();
    }
}