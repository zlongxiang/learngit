<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_L_DELIM' => '<{',
	'TMPL_R_DELIM' => '}>',
	/*
	'DB_TYPE'   => 'mysql',   //设置数据库类型
	'DB_HOST'   => 'localhost',//设置主机
	'DB_NAME'   => 'thinkphp',//设置数据库名
	'DB_USER'   => 'root',    //设置用户名
	'DB_PWD'    => 'zlx920',  //设置密码
	'DB_PORT'   => '3306',   //设置端口号
	*/
	'DB_PREFIX' => '',  //设置表前缀

	'DB_DSN' => 'mysql://root:zlx920@localhost:3306/thinkphp',//数据库连接信息DSN串
	'SHOW_PAGE_TRACE'=>'true',//开启页面Trace
	//'TMPL_FILE_DEPR' => '_',//修改模板文件目录层次
	//'DEFAULT_THEME'     => 'your',//设置默认模板主题
	//'TMPL_DETECT_THEME' => TRUE,//自动侦测模板主题
	//'THEME_LIST'        => 'your,my',//支持的模板主题列表
	'APP_STATUS' => 'debug',
	//"LOAD_EXT_FILE" => "myfunction",
);
?>