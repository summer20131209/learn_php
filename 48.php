<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="input1">
<input type="submit">
</form>

<?php 
//$name = htmlspecialchars($_REQUEST["fname"]); 
$name = $_REQUEST["input1"]; 
echo $name; 
?>

</body>
</html>