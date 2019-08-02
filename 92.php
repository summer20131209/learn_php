<?php
header("Content-type:text/html;charset=utf-8"); 
$expire=time()+60*60*24*30;
setcookie("user3", "runoob", $expire);
?>

<html>
<body>
<?php
if (isset($_COOKIE["user3"]))
    echo "欢迎 " . $_COOKIE["user3"] . "!<br>";
else
    echo "普通访客!<br>";
?>
<body>
</html>