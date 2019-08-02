<?php
header("Content-type:text/html;charset=utf-8"); 
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
$totals = count($cars);
for($x=0;$x<$totals;$x++){
	echo "降序后，车的牌子:".$cars[$x];
	echo "<br>";
}
echo "<br>或这样遍历：";
print_r($cars);  
?>