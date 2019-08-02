<?php
header("Content-type:text/html;charset=utf-8");
$con=mysqli_connect("localhost","root","root","mydb1750");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM myguests WHERE lastname='Moe'");

mysqli_close($con);
?>