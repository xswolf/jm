<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/15
 * Time: 10:19
 */

namespace Admin\Logic;


class File extends Base
{
    public function upload($rootPath, $size = 2097152){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     $size ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     $rootPath;//'./Public/Admin/dist/news_icon/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //返回绝对路径
            return 'www.jm.com'.$rootPath.$info['news_icon']['savepath'].$info['news_icon']['savename'];
            //$this->success('上传成功！');
        }
    }
}