<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 15:40
 */

/**
 * 获取文章类名
 */
function getNewsTypeName($news_type_id) {
    switch ($news_type_id){
        case 1  : return    '关于我们'; break;
        case 2  : return    '最新通告'; break;
        case 3  : return    '行业资讯'; break;
        case 4  : return    '嘉美服务'; break;
        case 5  : return    '赴美流程'; break;
        case 6  : return    '赴美攻略'; break;
        case 7  : return    '赴美益处'; break;
        default : return    false;  break;
    }
}

/**
 * 获取文章状态
 */
function getNewsStatus($status) {
    switch ($status){
        case 1  : return    '正常'; break;
        case 0  : return    '删除'; break;
        default : return    false;  break;
    }
}

/**
 * 获取图片类名
 */
function getImagesTypeName($news_type_id) {
    switch ($news_type_id){
        case 1  : return    '今日早餐'; break;
        case 2  : return    '今日午餐'; break;
        case 3  : return    '今日晚餐'; break;
        case 4  : return    '宝妈动态'; break;
        default : return    false;  break;
    }
}

/**
 * 获取图片状态
 */
function getImagesStatus($status) {
    switch ($status){
        case 1  : return    '正常'; break;
        case 0  : return    '删除'; break;
        default : return    false;  break;
    }
}

/**
 * @param $length 长度(大于6)
 * @return null|string 返回null或者长度$length字符串
 */
function getRandChar($length){
    $str = null;
    $strPol = "abcdefghijkmnpqrstuvwxyz123456789";
    $max = strlen($strPol)-1;
    $t = substr(time(),-6);
    $length = $length - 6;
    for($i=0;$i<$length;$i++){
        $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
    }
    $str = $t.$str;
    return $str;
}