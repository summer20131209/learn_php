<?php
header("Content-type:text/html;charset=utf-8"); 
class BaseClass {
	//var $str = str_replace(PHP_EOL, '', $str);

	
   function __construct() {
       print "BaseClass 类中构造方法" ;
   }
}
class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
       print "SubClass 类中构造方法" . PHP_EOL."<br>";
   }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();

	$str = str_replace(PHP_EOL, '', "absdgsd");
	
?>