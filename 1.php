<?php
	header("content-type:text/html;charset=utf8");
	$str='<p>
    <span style="FONT-FAMILY: 宋体">&nbsp; &nbsp; 欧洲第二大牛肉出口国爱尔兰在劳斯郡（</span><span style="FONT-FAMILY: Times New Roman">County Louth</span><span style="FONT-FAMILY: 宋体">）奶牛中发现一例疑似疯牛病（</span><span style="FONT-FAMILY: Times New Roman">BSE</span><span style="FONT-FAMILY: 宋体">）病例。爱尔兰农业部发表声明称，检测工作在进行中，以便确认该</span><span style="FONT-FAMILY: Times New Roman">5</span><span style="FONT-FAMILY: 宋体">岁母牛是否患有疯牛病</span><span style="FONT-FAMILY: Times New Roman">,</span><span style="FONT-FAMILY: 宋体">结果将于一周后得出。如确认，这将是爱尔兰</span><span style="FONT-FAMILY: Times New Roman">2013</span><span style="FONT-FAMILY: 宋体">年以来首例疯牛病。声明说，该母牛是在对农场死牛进行的检测中发现的，未进入食品供应链。研究人员还将对与感染母牛相关的牲畜进行检测。上世纪</span><span style="FONT-FAMILY: Times New Roman">90</span><span style="FONT-FAMILY: 宋体">年代以来，爱尔兰加大了疯牛病防控力度，发病率从</span><span style="FONT-FAMILY: Times New Roman">2002</span><span style="FONT-FAMILY: 宋体">年的</span><span style="FONT-FAMILY: Times New Roman">300</span><span style="FONT-FAMILY: 宋体">多例降至去年的零。世界动物卫生组织将爱尔兰的</span>风险等级从<span style="FONT-FAMILY: Times New Roman">“</span><span style="FONT-FAMILY: 宋体">已控制</span><span style="FONT-FAMILY: Times New Roman">”</span><span style="FONT-FAMILY: 宋体">降至</span>“<span style="FONT-FAMILY: 宋体">可忽略</span><span style="FONT-FAMILY: Times New Roman">”</span><span style="FONT-FAMILY: 宋体">。美国今年年初取消了对爱尔兰长达</span><span style="FONT-FAMILY: Times New Roman">15</span><span style="FONT-FAMILY: 宋体">年的牛肉进口禁令，中国也放宽了进口限制。</span>
</p>';
	$str=strip_tags($str,"<p><a><table><tr><td>");
$str=substr($str, 0,-4);
	$str.="<a href='a.com'>详情</a></p>";
	echo $str;
?>