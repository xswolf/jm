<?php
namespace Home\Controller;

use Home\Model\ImagesModel;

class MessageController extends BaseController {

    public function index(){

//        if(IS_POST){
            $list = ImagesModel::instance()->getList(0);
            $this->assign('list',$list);
//        }

      $this->display();
    }
}