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
    public function lists()
    {
        $lists = News::instance()->lists('news');

        $this->assign('lists', $lists);
        $this->display();
    }

    /**
     * 添加编辑
     */
    public function save()
    {
        $id = I('id');
        if ($_POST) {
            if (isset($id) && !empty($id)) { // 编辑
                News::instance()->edit($_POST, "news");
            } else { // 添加
                News::instance()->add($_POST, "news");
            }

            $this->success('修改成功' , U("News/lists"));
            exit();
        }
        if (isset($id) && !empty($id)) { // 编辑
            $bean = News::instance()->get($id, "news");
            $this->assign('bean', $bean); // 文章对象
            $this->display('edit');
        }else{
            $this->display('add');
        }

    }

}