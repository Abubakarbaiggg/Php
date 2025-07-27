<?php 
class school{
    public function getNames(student $names){
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
    }
}
class student{
    public function Names(){
        return ['Abubakar','Aamir','Abdul Rehman'];
    }    
}
class libary{

}
$lib = new libary();
$stu = new student();
$sch = new school();
$sch->getNames($stu);


?>