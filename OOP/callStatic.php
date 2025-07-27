<?php 
class student{
    private static function hello($name){
        echo "Hello $name";
    }
    public static function __callStatic($method,$args){
        if(method_exists(__CLASS__,$method)){
                call_user_func_array([__CLASS__,$method],$args);
        }else{
            echo "Method does not exists:" . $method;
        }
    }
}
student::hello("Abubakar");
?>