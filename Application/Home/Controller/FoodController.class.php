<?php
namespace Home\Controller;

class FoodController extends BaseController {

    public function index(){
        $time = time();
        $month = date('n',$time);
        $day = date('j',$time);
        $this->assign('month',$month);
        $this->assign('day',$day);
        $this->display();
    }
}