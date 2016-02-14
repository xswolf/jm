<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 11:16
 */

namespace Admin\Controller;


use Admin\Logic\News;

class NewsController extends BaseController
{

    /**
     * 文章列表
     */
    public function lists(){
        $lists = News::instance()->lists('news');

        $this->assign('lists' , $lists);
        $this->display();
    }

    /**
     * 添加文章
     */
    public function add(){

//        \Admin\Logic\News::instance()->add( $_POST , 'news' );
        $this->display();
    }

    /**
     * 编辑文章
     */
    public function edit(){

    }
}