<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 11:16
 */

namespace Admin\Controller;


use Admin\Logic\File;
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
            //判断标题，内容是否为空
            if(!empty($_POST['title']) && !empty($_POST['content'])) {

                if (isset($id) && !empty($id)) { // 编辑
                    $news_icon_url = '.'.I('news_icon_url');//新文件路径
                    $old_icon_url = '.'.I('old_icon_url');//旧文件路径
                    unset($_POST['old_icon_url']);//删除无用数组元素
                    //文件更改判断.删除旧文件
                    if($news_icon_url != $old_icon_url && file_exists($old_icon_url)) {
                        unlink($old_icon_url);
                    }
                    $data['updated_at'] = time();
                    $data['id'] = htmlspecialchars($_POST['id']);
                    $data['title'] = htmlspecialchars($_POST['title']);
                    $data['news_icon_url'] = htmlspecialchars($_POST['news_icon_url']);
                    $data['news_type_id'] = htmlspecialchars($_POST['news_type_id']);
                    $data['content'] = htmlspecialchars($_POST['content']);
                    $data['status'] = htmlspecialchars($_POST['status']);
                    News::instance()->edit($data, "news");
                } else { // 添加
                    $data['created_at'] = time();
                    $data['updated_at'] = time();
                    $data['id'] = htmlspecialchars($_POST['id']);
                    $data['title'] = htmlspecialchars($_POST['title']);
                    $data['news_icon_url'] = htmlspecialchars($_POST['news_icon_url']);
                    $data['news_type_id'] = htmlspecialchars($_POST['news_type_id']);
                    $data['content'] = htmlspecialchars($_POST['content']);
                    $data['status'] = htmlspecialchars($_POST['status']);
                    News::instance()->add($data, "news");
                }
            }
            $this->_success('操作成功' , U('News/lists'));
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