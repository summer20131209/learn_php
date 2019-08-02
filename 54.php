<?php
//for 循环用于您预先知道脚本需要运行的次数的情况。
for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}
echo "<br>";
//foreach 循环用于遍历数组。
$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}
?>