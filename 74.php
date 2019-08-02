欢迎<?php 
header("Content-type:text/html;charset=utf-8"); 
echo $_POST["fname"]."<br>"; 
echo $_POST["age"]."<br>"; 

echo "<br>或者使用_REQUEST变量来打印"."<br>";
//echo $_REQUEST["fname"]."<br>"; 
//echo $_REQUEST["age"]."<br>"; 
 ?> 
