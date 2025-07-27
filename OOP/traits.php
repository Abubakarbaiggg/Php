<?php
trait hello{
    private function sayHello(){
        echo "Hello From Hello Traits\n";
    }
}
class base{
    use hello{
        hello::sayHello as public newHello;
    }
}
$test = new base();
$test->newHello();
?>
