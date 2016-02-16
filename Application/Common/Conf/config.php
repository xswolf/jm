<?php
return array(
	//'配置项'=>'配置值'

    /* 模块相关配置 */
//    'AUTOLOAD_NAMESPACE' => array('Addons' => ONETHINK_ADDON_PATH), //扩展模块列表
    'DEFAULT_MODULE'     => 'Home',
    'MODULE_DENY_LIST'   => array('Common', 'User'),
//    'MODULE_ALLOW_LIST'  => array('Home','Admin'),

    /* 系统数据加密设置 */
    'DATA_AUTH_KEY' => 'Ge41o:3>liWXx}<?.0=rRwJp{HzI|Q7(vFfuPcSU', //默认数据加密KEY

    /* SESSION 和 COOKIE 配置 */
    'SESSION_PREFIX' => 'onethink_home', //session前缀
    'COOKIE_PREFIX'  => 'onethink_home_', // Cookie前缀 避免冲突

    /* 调试配置 */
    'SHOW_PAGE_TRACE' => true,
    'DB_FIELDS_CACHE' => true,

    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 1, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => 'strip_tags,addslashes', //全局过滤函数

    /* 数据库配置 */
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => '120.76.73.46', // 服务器地址
    'DB_NAME'   => 'jm', // 数据库名
    'DB_USER'   => 'jmyz', // 用户名
    'DB_PWD'    => 'jmyz*2016',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'jm_', // 数据库表前缀

    /* 文档模型配置 (文档模型核心配置，请勿更改) */
    'DOCUMENT_MODEL_TYPE' => array(2 => '主题', 1 => '目录', 3 => '段落'),


    "LOGIN_SESSION"    => "bhy_user",  // 登陆用户的SESSION名称
);