<?php
$a = 1;
function Test()
{
	
	//global $a; 注：函数体内引用全局变量，必须在函数内部使用“global”关键字否则会报错
    echo "a = $a";
}
Test();
?>