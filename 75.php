<?php
header("Content-type:text/html;charset=utf-8"); 
$q1 = isset($_GET['q1'])? htmlspecialchars($_GET['q1']) : '';//或$q = $_GET['q']?:htmlspecialchars($_GET['q']);
if($q1) {
        if($q1 =='RUNOOB') {
                echo '菜鸟教程,网址为http://www.runoob.com';
        } else if($q1=='GOOGLE') {
                echo 'Google 搜索,网址为>http://www.google.com';
        } else if($q1 =='TAOBAO') {
                echo '淘宝,网址为http://www.taobao.com';
        }
} else {
?>
<form action="" method="get"> 
    <select name="q1">
    <option value="">选择一个站点:</option>
    <option value="RUNOOB">Runoob</option>
    <option value="GOOGLE">Google</option>
    <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
    </form>
<?php
}
?>