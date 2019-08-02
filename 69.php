<?php
class Foo {
  public static $my_static = 'foo';
  
  public function staticValue() {
     return self::$my_static;
  }

}

print Foo::$my_static . PHP_EOL."<br>";
$foo = new Foo();

print $foo->staticValue() . PHP_EOL."<br>";
?>   