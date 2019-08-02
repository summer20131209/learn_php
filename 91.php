<?php
$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);
?>

<html>
<body>
<?php
// 输出 cookie 值
echo $_COOKIE["user"]."<br>";

// 查看所有 cookie
print_r($_COOKIE);
?>
<body>
</html>