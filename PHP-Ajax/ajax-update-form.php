<?php 

$student_id = $_POST['student_id'];            
$student_name = $_POST['student_name'];        
$student_age = $_POST['student_age'];          
$student_city = $_POST['student_city'];        


$conn = mysqli_connect("localhost","root","","oop") or die("Connection Failed");

$sql = "UPDATE students SET student_name = '{$student_name}', age = '{$student_age}', city = '{$student_city}' WHERE id = {$student_id}";

if(mysqli_query($conn,$sql)){
    echo "1";
}else{
    echo "0";
};


?>