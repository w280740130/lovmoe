<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>手机验证</title>
</head>
<body>

<?php
//正则表达式
$tel = "15558530459";//作者的手机号码,如果有疑问可以电话联系我,或者QQ联系我,我的QQ是mezongzi@qq.com
if(strlen($tel) == "11")
{
//上面部分判断长度是不是11位
$n = preg_match_all("/13[123569]{1}\d{8}|15[1235689]\d{8}|188\d{8}/",$tel,$array);
/*接下来的正则表达式("/131,132,133,135,136,139开头随后跟着任意的8为数字 '|'(或者的意思)
* 151,152,153,156,158.159开头的跟着任意的8为数字
* 或者是188开头的再跟着任意的8为数字,匹配其中的任意一组就通过了
* /")*/

var_dump($array); //看看是不是找到了,如果找到了,就会输出电话号码的
}else
{
echo "长度必须是11位";
}
/*
* 虽然看起来复杂点,清楚理解!
* 如果有更好的,可以贴出来,分享快乐!
* */
?> 

</body>
</html>