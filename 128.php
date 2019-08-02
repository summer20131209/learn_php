<?php
header("Content-type:text/html;charset=utf-8");
$con=mysqli_connect("localhost","root","root","mydb1750");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyGuests
WHERE FirstName='JOHN'");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname']. " " . $row['email'];
    echo "<br>";
}
?>