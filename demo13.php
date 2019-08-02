<!DOCTYPE html>
<html>
<body>

<?php 
header("Content-type:text/html;charset=utf-8"); 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo '<br>';
echo $cars[1];
echo '<br>';
echo "第二个车是{$cars[0]}";
?>   

</body>
</html>