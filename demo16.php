<?php
header("Content-type:text/html;charset=utf-8"); 
if(42 == "42") {
    echo '1、值相等';
}
 
print "<br>";

echo PHP_EOL; // 换行符,像是不起作用
 
 
if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、不相等';
}
?>