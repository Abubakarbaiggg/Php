<?php 

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","oop") or die("Connection Failed");

$sql = "SELECT * FROM students WHERE id = {$student_id}" ;
$result = mysqli_query($conn,$sql) or die("SQL Query Failed");
$output = "";

if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $output .= " <form id='addForm' class='mb-3'>
                                            <label for='' class='form-label'>Student Name</label>
                                            <input type='text' class='form-control' name='student_name' value'{$row['student_name']}' id='student_name' />
                                            <label for='' class='form-label'>Age</label>
                                            <input type='text' class='form-control' name='age' value'{$row['age']}' id='age' />
                                            <label for='' class='form-label'>City</label>
                                            <input type='text' class='form-control' name='city' value'{$row['city']}' id='city' />
                                            <input type='submit' class='btn btn-primary mt-2' id='save-button' value='Save'>
                                        </form>";
                        }
                        mysqli_close($conn);
                        echo $output;
}else{
    echo "<h2>No Record Found</h2>";
}



?>