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
            if (isset($id) && !empty($id)) { // 编辑
                $_POST['updated_at'] = time();
                if($_FILES['news_icon']['size']) {//判断文件是否更新
                    $url = File::instance()->upload(C('NEWS_ICON_PATH'));
                    $_POST['news_icon_url'] = $url;
                }
                News::instance()->edit($_POST, "news");
            } else { // 添加
                $_POST['created_at'] = time();
                $_POST['updated_at'] = time();
                $url = File::instance()->upload(C('NEWS_ICON_PATH'));//获取文件保存路径
                $_POST['news_icon_url'] = $url;
                News::instance()->add($_POST, "news");
            }

            $this->success('修改成功' , U("Admin/News/lists"));
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