<?php 

class student{
    public $cource = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep(){
        return array('first_name','last_name');
    }
    public function __wekaup(){
        echo  "This is wakeup method.";
    }
}

$obj = new Student();
$obj->setName("Abubakar","Baig");
$srl = serialize($obj);
$us = unserialize($srl);
echo $srl;

?>