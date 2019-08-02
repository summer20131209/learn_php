<?php
header("Content-type:text/html;charset=utf-8"); 
$to = "343827585@qq,cin";         // 邮件接收者
$subject = "这是PHP发送的测试邮件。参数邮件";                // 邮件标题
$message = "这是PHP发送的测试邮件Hello! 这是邮件的内容。";  // 邮件正文
$from = "214980423@qq.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>