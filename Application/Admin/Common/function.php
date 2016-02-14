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