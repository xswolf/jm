<?php
namespace Home\Controller;


use Home\Model\ImagesModel;
use kcfinder\cookie;

class FoodController extends BaseController {

    public function index(){
        //将当前时间存入cookie
        if(!cookie('newtime')) {
            $today = date('Y-m-d');
            $today = strtotime($today);
            cookie('newtime',$today);
        }
        $time = cookie('newtime');
        $month = date('n',$time);
        $day = date('j',$time);
        $where = ['status'=>1,'time'=>$time,'type_id'=>1];
        if($_POST) {
            switch(I('type')) {
                case 0://前一天
                    $newtime = cookie('newtime') -(24*60*60);
                    cookie('newtime',$newtime);
                    $where = ['status'=>1,'time'=>$newtime,'type_id'=>1];
                    break;
                case 1://今天
                    $today = date('Y-m-d');
                    cookie('newtime',strtotime($today));
                    $where = ['status'=>1,'time'=>strtotime($today),'type_id'=>1];
                    break;
                case 2://早餐
                    $newtime = cookie('newtime');
                    $where = ['status'=>1,'time'=>$newtime,'type_id'=>1];
                    break;
                case 3://午餐
                    $newtime = cookie('newtime');
                    $where = ['status'=>1,'time'=>$newtime,'type_id'=>2];
                    break;
                case 4://晚餐
                    $newtime = cookie('newtime');
                    $where = ['status'=>1,'time'=>$newtime,'type_id'=>3];
                    break;
            }
            $list = ImagesModel::instance()->getList(false,1,12,$where);
            $this->ajaxReturn($list);
        }

        $list = ImagesModel::instance()->getList(false,1,12,$where);
        $this->assign('list',$list);
        $this->assign('month',$month);
        $this->assign('day',$day);
        $this->display();
    }
}