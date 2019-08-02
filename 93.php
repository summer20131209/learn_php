<?php
header("Content-type:text/html;charset=utf-8"); 
session_start();//session_start() 函数必须位于 <html> 标签之前
 
if(isset($_SESSION['views']))//isset() 函数检测是否已设置 "views" 变量。如果已设置 "views" 变量，我们累加计数器。如果 "views" 不存在，则创建 "views" 变量，并把它设置为 1：
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1; //存储 Session 变量
}
echo "浏览量：". $_SESSION['views'];
?>