<?php 

class student{
    public $cource = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __unset($property){
        unset($this->$property);
    }   
}

$test = new student();
$test->setName("Abubakar","Baig");
unset($test->last_name);
echo "<pre>";
print_r($test);
echo "</pre>";

// echo $test->cource;

?>