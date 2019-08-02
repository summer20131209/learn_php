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
}

class Site {
  /* 成员变量 */
  var $url;
  var $title;
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL."<br>";
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL."<br>";
  }
}

$runoob = new Child_Site;
$taobao = new Child_Site;
$google = new Child_Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$runoob->setUrl( 'www.runoob.com' );
$runoob->setCate("test1111111111");

$taobao->setTitle( "淘宝" );
$taobao->setUrl( 'www.taobao.com' );
$taobao->setCate("test2222222222");

$google->setTitle( "Google 搜索" );
$google->setUrl( 'www.google.com' );
$google->setCate("test3333333333");


// 调用成员函数，获取标题和URL
$runoob->getTitle();
$runoob->getUrl();
$runoob->getCate();

$taobao->getTitle();
$taobao->getUrl();
$taobao->getCate();

$google->getTitle();
$google->getUrl();
$google->getCate();

?>