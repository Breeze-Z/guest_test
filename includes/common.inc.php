<?php
if(!defined('IN_TG')){
    exit('非法访问！');
}
//设置字符编码
header('Content-Type:text/html;charset=utf-8');

//设置访问硬路径，加快访问速度
define('ROOT_PATH', substr(dirname(__FILE__),0,-8));

//检查php版本
if(PHP_VERSION<'4.4.0'){
    exit('PHP版本过低!');
}

require ROOT_PATH.'/includes/global.func.php';

//开始运行的时间
define('START_TIME',run_time());