<?php
header("Content-type:text/html;charset=utf-8"); 
session_start();
if(isset($_SESSION['views']))
{
    unset($_SESSION['views']);
	echo "销毁session";
}
/*
//<?php
//session_destroy();
//?>
*/
?>
