<?php 
header("Content-type:text/html;charset=utf-8"); 
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");  
asort($age);  
print_r($age);  
?> 