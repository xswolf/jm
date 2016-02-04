<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/4/0004
 * Time: 11:54
 */
return [
    'APP_USE_NAMESPACE'     =>  true,    // 应用类库是否使用命名空间 3.2.1新增
    'APP_SUB_DOMAIN_DEPLOY' =>  false,   // 是否开启子域名部署
    'APP_SUB_DOMAIN_RULES'  =>  array(), // 子域名部署规则
    'APP_DOMAIN_SUFFIX'     =>  '', // 域名后缀 如果是com.cn net.cn 之类的后缀必须设置
    'ACTION_SUFFIX'         =>  '', // 操作方法后缀
    'MULTI_MODULE'          =>  true, // 是否允许多模块 如果为false 则必须设置 DEFAULT_MODULE
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'), // 禁止访问的模块列表
    'MODULE_ALLOW_LIST'     =>  array(),    // 允许访问的模块列表
    'CONTROLLER_LEVEL'      =>  1,
    'APP_AUTOLOAD_LAYER'    =>  'Controller,Model', // 自动加载的应用类库层（针对非命名空间定义类库） 3.2.1新增
    'APP_AUTOLOAD_PATH'     =>  '', // 自动加载的路径（针对非命名空间定义类库） 3.2.1新增
];