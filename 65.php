<?php

// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
	    public function testMethod();
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($template as $x => $xb_value) {
             echo "Key=" . $x . ", Value=" . $xb_value;
				echo "<br>";
        }
 
        return $template;
    }
	
	    public function testMethod(){
			echo 'testMethod()';
		}
}

$temp = new Template;
$temp->testMethod();
echo "<br>";
$vars = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
$temp->getHtml($vars);
?>