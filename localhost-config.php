<?php
//百度云存储BCS的配置信息
$ak = '';//AK 公钥
$sk = '';//SK 私钥
$host = 'bcs.duapp.com';
$bucket = '';//Bucket 
//数据库的配置信息
$servername = 'localhost:3306';
$dbusername = 'root'; //数据用户名
$dbpassword = '123456'; //数据密码
$dbname = 'baefile';//数据库名
$conn = mysql_connect($servername,$dbusername,$dbpassword);
mysql_select_db($dbname);
mysql_query("set names utf8");
$myurl = $_SERVER['HTTP_HOST'];
?>