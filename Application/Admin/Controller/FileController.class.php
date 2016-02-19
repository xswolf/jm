<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/15
 * Time: 14:48
 */
namespace Admin\Controller;


class FileController extends BaseController
{
    public function upload(){
        $size = 2097152;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     $size ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/web_image/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录

        //判断当前文件夹是否存在，不存在则创建此文件夹
        if(!file_exists($upload->rootPath)) {
            mkdir($upload->rootPath);
        }
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //返回绝对路径
            $url = substr($upload->rootPath,1).$info['news_icon']['savepath'].$info['news_icon']['savename'];
            $return  = array('status' => 1, 'info' => '上传成功', 'imgurl' => $url);
            $this->ajaxReturn($return);
        }
    }
}