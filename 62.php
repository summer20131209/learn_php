<?php 
header("Content-type:text/html;charset=utf-8"); 
// 子类扩展站点类别
class Child_Site extends Site {
   var $category;

    function setCate($par){
        $this->category = $par;
    }
  
    function getCate(){
        echo $this->category . PHP_EOL."<br>";
    }
	
	 function getUrl(){
     echo $this->url . PHP_EOL.",我对父类的getUrl函数进行了重写<br>";
  }
}

class Site {
  /* 成员变量 */
  var $url;
 
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL."<br>";
  }
 
}

$runoob = new Child_Site;


// 调用成员函数，设置标题和URL
$runoob->setUrl( "菜鸟教程" );

// 调用成员函数，获取标题和URL
$runoob->getUrl();


?>