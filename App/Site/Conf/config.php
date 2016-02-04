<?php
return array(
	//'配置项'=>'配置值'
		'HTML_CACHE_ON' => C('HTML_CACHE_ON__HOME'),
		'HTML_CACHE_RULES'=>array(
				'index:index'=>array('Site/{:module}_{:action}_index',C('HTML_TIME_INDEX__HOME')),
				
				'group'=>array('Site/{:module}_{:action}_{id}_{p|intval}',C('HTML_TIME_GROUP__HOME')),
				'detail'=>array('Site/{:module}_{:action}_{id}_{p|intval}',C('HTML_TIME_DETAIL__HOME')),
		
		),
		'DEFAULT_THEME'=>C('DEFAULT_THEME__HOME'),
		'TMPL_PARSE_STRING' =>  array( // 添加输出替换
				'__UPLOAD__'    =>  __ROOT__.'/Uploads',
				'__PUBLIC__' => __ROOT__. '/Public/'.'Site'.'/'.C('DEFAULT_THEME__HOME'),
		),
		
		'VIEW_PATH'=>'./Public/Site/', //改变某个模块的模板文件目录


        'LAYOUT_ON'=>true,       //模版布局
        'LAYOUT_NAME'=>'layout\main',
);