<?php
namespace Home\Controller;

use Home\Model\MessageModel;

class MessageController extends BaseController {

    public function index(){
        if(IS_POST){
            $list = MessageModel::instance()->getList(true);
            $this->assign('list',$list);
        }

      $this->display();
    }
}