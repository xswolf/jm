<?php
return array(
	//'配置项'=>'配置值'
        'TMPL_FILE_DEPR'=>'/',//修改模板文件目录层次,主题模板目录/模块/方法.html
		'HTML_CACHE_ON' => C('HTML_CACHE_ON__HOME'),
		'HTML_CACHE_RULES'=>array(
				'index:index'=>array('Site/{:module}/{:action}/index',C('HTML_TIME_INDEX__HOME')),
				'group'=>array('Site/{:module}/{:action}/{id}/{p|intval}',C('HTML_TIME_GROUP__HOME')),
				'detail'=>array('Site/{:module}/{:action}/{id}/{p|intval}',C('HTML_TIME_DETAIL__HOME')),

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