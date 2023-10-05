<?php

require once ("trying_php.php");

class unittest extends \PHPUnit\Framework\TestCase{

public function test_construct(){
    $hw= new HelloWorld();
    $this -> assertEquals("Hello World", $hw->helloWorld);
}

}

?>  
