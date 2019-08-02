<?php 
$x=5; 
$y=10; 

function myTest() 
{ 
    global $x,$y; 
    $y=$x+$y; 
} 

myTest(); 
echo $y; // 输出 15 
?> 
<br>
<?php
$x1=53;
$y1=10;
 
function myTest1()
{
    $GLOBALS['y1']=$GLOBALS['x1']+$GLOBALS['y1'];
} 
 
myTest1();
echo $y1;
?>