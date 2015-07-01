<?php
header("content-type:text/html;charset=utf-8");
$con=mysql_connect("localhost","root","");
if(mysql_errno()){
	echo "error";
	exit;
}
mysql_query("set names utf8");
mysql_select_db("2760");
$res=mysql_query("select * from lp_fanyi limit 0,10");
print_r($res);
?>