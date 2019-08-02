<?php
header("Content-type:text/html;charset=utf-8"); 
class MyDestructableClass {
   function __construct() {
       print "构造函数\n<br>";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "销毁 " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
?>