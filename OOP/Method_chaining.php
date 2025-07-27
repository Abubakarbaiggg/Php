<?php

class abc{
    public function first(){
        echo "This is my first function\n";
        return $this;
    }
    public function second(){
        echo "This is my second function\n";
        return $this;
    }
    public function third(){
        echo "This is my third function\n";
    }
}

$test = new abc();
$test->first()->second()->third();
?>