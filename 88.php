<?php
header("Content-type:text/html;charset=utf-8"); 
$file = fopen("89.txt", "r") or exit("无法打开文件!");
while(!feof($file))// 读取文件每一行，直到文件结尾
{
    //echo fgets($file). "<br>";//fgets() 函数用于从文件中逐行读取文件。在调用该函数之后，文件指针会移动到下一行。
	echo fgetc($file);//fgetc() 函数用于从文件中逐字符地读取文件。在调用该函数之后，文件指针会移动到下一个字符
}
fclose($file);//fclose() 函数用于关闭打开的文件
?>