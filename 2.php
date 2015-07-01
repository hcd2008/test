<?php
header("content-type:text/html;charset=utf-8");
$text = '<IMG SRC="1.jpg" title="123.jpg" alt="论坛活动" />';
 
$tt1='/(<img.*?src=(\S+)[^>]*>)/is';
$text=preg_replace($tt1,"<a href=$2>$1</a>",$text);
 
print $text;


?>