<?php
function myTest($x)
{
    echo $x;
	echo '<br>';
	echo $_SERVER['HTTP_USER_AGENT'];
}
myTest(5);
?>