<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 11:16
 */

namespace Admin\Controller;


use Admin\Logic\File;
use Admin\Logic\Images;

class ImagesController extends BaseController
{

    /**
     * 图片列表
     */
    public function lists()
    {
        $lists = Images::instance()->lists('images' ,'status=1', '' , 10000);

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
            if(!empty($_POST['name'])) {

                if (isset($id) && !empty($id)) { // 编辑
                    $img = '.'.I('img');//新文件路径
                    $original_url = '.'.I('original_url');//新文件路径
                    $old_img = '.'.I('old_img');//旧文件路径
                    $old_original_url = '.'.I('old_original_url');//旧文件路径
                    //文件更改判断.删除旧文件
                    if($img != $old_img && file_exists($old_img)) {
                        unlink($old_img);
                    }
                    if($original_url != $old_original_url && file_exists($old_original_url)) {
                        unlink($old_original_url);
                    }
                    $data['updated_at'] = time();
                    $data['id'] = htmlspecialchars($_POST['id']);
                    $data['name'] = htmlspecialchars($_POST['name']);
                    $data['content'] = htmlspecialchars($_POST['content']);
                    $data['time'] = strtotime($_POST['time']);
                    $data['img'] = htmlspecialchars($_POST['img']);
                    $data['original_url'] = htmlspecialchars($_POST['original_url']);
                    $data['type_id'] = htmlspecialchars($_POST['type_id']);
                    $data['status'] = htmlspecialchars($_POST['status']);
                    Images::instance()->edit($data, "images");
                } else { // 添加
                    $data['created_at'] = time();
                    $data['updated_at'] = time();
                    $data['name'] = htmlspecialchars($_POST['name']);
                    $data['content'] = htmlspecialchars($_POST['content']);
                    $data['time'] = strtotime($_POST['time']);
                    $data['img'] = htmlspecialchars($_POST['img']);
                    $data['original_url'] = htmlspecialchars($_POST['fileurl']);
                    $data['type_id'] = htmlspecialchars($_POST['type_id']);
                    $data['status'] = htmlspecialchars($_POST['status']);
                    Images::instance()->add($data, "images");
                }
            }
            $this->_success('操作成功' , U('Images/lists'));
            exit();
        }
        if (isset($id) && !empty($id)) { // 编辑
            $bean = Images::instance()->get($id, "images");
            $this->assign('bean', $bean); // 图片对象
            $this->display('edit');
        }else{
            $this->display('add');
        }
    }

}