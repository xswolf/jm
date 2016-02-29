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
    //图片上传（目前用于文章图标）
    public function upload(){
        $size = 2097152;//2M
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
            $fileurl = $upload->rootPath.$info['news_icon']['savepath'].$info['news_icon']['savename'];
            $url = $upload->rootPath.$info['news_icon']['savepath'].getRandChar(13).'.'.$info['news_icon']['ext'];
            $image = new \Think\Image();
            $image->open($fileurl);
            //另存最大宽度是240的压缩图片
            $image->thumb(240,240)->save($url);
            //返回绝对路径
            $fileurl = substr($fileurl,1);//原图路径
            $url = substr($url,1);//缩略图路径
            $return  = array('status' => 1, 'info' => '上传成功', 'imgurl' => $url, 'fileurl' => $fileurl);
            $this->ajaxReturn($return);
        }
    }

    //图片上传（目前用于一日膳食、宝妈动态）
    public function imagesUpload(){
        $size = 8388608;//8M
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
            $fileurl = $upload->rootPath.$info['images']['savepath'].$info['images']['savename'];
            $imgInfo = getimagesize($fileurl);//获取图片信息
            $width = 225;//宽度
            $rath = $width/$imgInfo[0];//按照宽度计算比例
            $height = $rath*$imgInfo[1];//等比例计算高度
            $url = $upload->rootPath.$info['images']['savepath'].getRandChar(13).'.'.$info['images']['ext'];
            $image = new \Think\Image();
            $image->open($fileurl);
            //压缩图片
            $image->thumb($width,$height)->save($url);
            //返回绝对路径
            $fileurl = substr($fileurl,1);//原图路径
            $url = substr($url,1);//缩略图路径
            $return  = array('status' => 1, 'info' => '上传成功', 'imgurl' => $url, 'fileurl'=> $fileurl);
            $this->ajaxReturn($return);
        }
    }
}