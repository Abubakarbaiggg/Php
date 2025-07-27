<?php 

require "product.php";
require "testing.php";

    function wow(){
        echo "Wow From Products File.<br>";
    }
    use pro\v1\commond as cmd;

$obj = new cmd\product();
cmd\wow();
?>