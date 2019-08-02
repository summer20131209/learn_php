<?php
header("Content-type:text/html;charset=utf-8"); 
$int = 123sdgsdg;
 
if(!filter_var($int, FILTER_VALIDATE_INT))
{
    echo("不是一个合法的整数");
}
else
{
    echo("是个合法的整数");
}
?>