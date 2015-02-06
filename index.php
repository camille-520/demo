<?php
function microtime_float(){
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$begin_time = microtime_float();
//定义CanPHP框架目录
define('CP_PATH',dirname(__FILE__).'/CanPHP/');//注意目录后面加“/”

require(dirname(__FILE__).'/config.php');//加载配置
require(CP_PATH.'core/cpApp.class.php');//加载应用控制类

$app=new cpApp($config);//实例化单一入口应用控制类
//执行项目
$app->run();
echo microtime_float() - $begin_time;
echo 'hello!world!!123456okok';
//Creating a new branch is quick AND simple.

?>