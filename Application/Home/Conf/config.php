<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_CACHE_ON' => false,
	'APP_GROUP_LIST' => 'Home,Admin',
	'DEFAULT_GROUP' =>'Home',
	'SHOW_PAGE_TRACE'            =>  false,              // 显示页面Trace信息
	'TMPL_FILE_DEPR'                   =>  '_',
	'TMPL_PARSE_STRING'           =>  array(
		'__JS__'    =>    '/Public/Js',
		'__CSS__'    =>    '/Public/Css',
		'__IMG__'    =>    '/Public/Images',
		'__UPL__'    =>    '/Uploads',
	),
	//邮件配置
	'THINK_EMAIL'            => array(
	    'SMTP_HOST'                => 'smtp.qq.com',        //SMTP服务器
	    'SMTP_PORT'                => '25',                //SMTP服务器端口
	    'SMTP_USER'                => '@qq.com',        //SMTP服务器用户名
	    'SMTP_PASS'                => '',            //SMTP服务器密码
	    'FROM_EMAIL'            => '@qq.com',        //发件人EMAIL
	    'FROM_NAME'                => '',        //发件人名称
	    'REPLY_EMAIL'            => '',                    //回复EMAIL（留空则为发件人EMAIL）
	    'REPLY_NAME'            => '',                    //回复名称（留空则为发件人名称）
	),
	'DB_TYPE'               => 'mysql',     // 数据库类型
	'DB_HOST'               => 'localhost', // 服务器地址
	'DB_NAME'               => 'project',          // 数据库名
	'DB_USER'               => 'root',      // 用户名
	'DB_PWD'                => '111222333',          // 密码
	'DEFAULT_TIMEZONE' => 'PRC',
	'TMPL_ACTION_ERROR' => APP_PATH.'/Tpl/Home/theme/Public/success.html', //跳转
	'TMPL_ACTION_SUCCESS' =>  APP_PATH.'/Tpl/Home/theme/Public/success.html',
	'URL_MODEL'					 => 2,
	'URL_HTML_SUFFIX'       => '',       //去除伪静态

    
);