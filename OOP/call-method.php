<?php 
 
class student{
    private $firstname;
    private $lastname;

    private function setName($fname,$lname){
        $this->firstname = $fname;
        $this->lastname = $lname;
    }
    public function __call($method,$args){
        if(method_exists($this,$method)){
            call_user_func_array([$this,$method],$args);
        }else{
            echo "Method does not exist: $method";
        }
    }
}

$test = new student();
$test->setname("Abubakar","Baig");
echo "<pre>";
print_r($test);
echo "</pre>";

?>