<?php
// 括号优先运算
 
$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo $d; //7
echo "<br>";
$e = ($a + $b) * $c;  // 使用括号
echo $e;//9
echo "<br>";
?>