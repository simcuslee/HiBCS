<?php
//百度云存储BCS的配置信息
$ak = '';//AK 公钥
$sk = '';//SK 私钥
$host = 'bcs.duapp.com';
$bucket = '';//Bucket
$servername = getenv('HTTP_BAE_ENV_ADDR_SQL_IP').':'.getenv('HTTP_BAE_ENV_ADDR_SQL_PORT');
$dbusername = getenv('HTTP_BAE_ENV_AK');
$dbpassword = getenv('HTTP_BAE_ENV_SK');
$dbname = '';//你的BAE数据库名
$conn = mysql_connect($servername,$dbusername,$dbpassword);
mysql_select_db($dbname);
mysql_query("set names utf8");
$myurl = $_SERVER['HTTP_HOST'];
?>