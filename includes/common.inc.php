<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/3/7
 * Time: 17:39
 */

//设置中文字符
header('Content-Type:text/html;charset=utf-8');

//屏蔽Notice错误提示
error_reporting(E_ALL ^ E_NOTICE);

//转换硬路径常量
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));

//创建一个自动转移状态的常量
//define('GPC',get_magic_quotes_gpc());

//拒绝PHP低版本
if(PHP_VERSION<'5.4.45'){
    exit('Version is to Low!');
}

//开启SESSION
session_start();

//引入核心函数库
require ROOT_PATH.'includes/global.func.php';
//require ROOT_PATH.'includes/mysql.func.php';

//执行耗时
//define('START_TIME',_runtime());

//数据库链接
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','root');
define('DB_NAME','test');

// 创建连接
$conn = new mysqli(DB_HOST, DB_USER, DB_PWD,DB_NAME);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
if(!mysqli_query($conn,'SET NAMES UTF8')){
    exit('字符集设置失败');
}

//_connect();//链接数据库
//_set_names();//设置字符集


?>

