<?php

class abc{
    public function __construct(){
        echo "This is construct file" . "<br>";
    }
    public function hello(){
        echo "Hello Everyone" . "<br>";
    }
    public function __destruct(){
        echo "This is destruct fuction" . "<br>";
    }
}
$test = new abc();
$test->hello();

?>