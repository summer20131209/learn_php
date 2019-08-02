<!DOCTYPE html>
<html>
<body>

<form method="post" action="SDGASDG.php">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_POST['fname']; 
echo $name; 
?>

</body>
</html>