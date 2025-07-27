<?php 



class abc{
}
class xyz extends abc{

}

echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

//=============================================================

// class abc{
//     static public function test(){
//         var_dump(get_called_class());
//     }
// }
// class xyz extends abc{

// }

// abc::test();
// xyz::test();

//=============================================================

// class myclass{
//     public $var1;
//     public $var2 = "Hello";
//     public $var3 = 100;
//     private $var4;

//     public function __construct() {
//         $this->var1 = "Abubakar";
//         $this->var2 = "Baig";
//         echo "<pre>";
//         // print_r(get_class_vars(__CLASS__));
//         print_r(get_object_vars($this));
//         echo "</pre>";
//     }
// }

// $obj = new myclass();
// $class_vars = get_object_vars($obj);
// echo "<pre>";
// print_r($class_vars);
// echo "</pre>";

// $class_vars = get_class_vars(get_class($obj));
// class myClass{
//     function __construct(){
//         print_r(get_class_methods($this));
//     }
//     function myfunc1(){

//     }
//     function myfunc2(){

//     }
// }

// $obg = new myClass();

// $class_method = get_class_methods('myClass');
// print_r($class_method);


// class xyz extends abc{
//  function name(){
//     echo "Class  Name : " . get_parent_class($this) . "\n";
//  }
// }
// $obj = new xyz;
// $obj->name();
// // echo "Class Name  is :" . get_class($obj);
?>