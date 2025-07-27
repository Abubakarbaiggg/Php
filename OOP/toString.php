<?php 

class abc{
    public function __toString(){
        return "Can't print object as a string : " . get_class($this);
    }
}
$test = new abc();
echo $test;
?>