<?php 

$student_name = $_POST['student_name'];
$age = $_POST['age'];
$city = $_POST['city'];

$conn = mysqli_connect("localhost","root","","oop") or die("Connection Failed");

$sql = "INSERT INTO students(student_name,age,city)VALUES('{$student_name}','{$age}','{$city}')";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}

?>