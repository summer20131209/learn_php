<?php 
header("Content-type:text/html;charset=utf-8");  
$x=5; // 全局变量 

function myTest() 
{ 
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    //函数内不能访问全局变量 echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  

myTest(); 

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
//函数外不能访问函数内的局部变量 echo "变量 y 为: $y"; 
?> 