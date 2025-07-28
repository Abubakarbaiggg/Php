<?php 

$conn = mysqli_connect("localhost","root","","oop") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed");
$output = "";

if(mysqli_num_rows($result) > 0){
    $output .= "<table class='table table-primary' id='table-data'>
                       <thead>
                            <tr>
                                <th scope='col'>Student Id</th>
                                <th scope='col'>Student Name</th>
                                <th scope='col'>Student Age</th>
                                <th scope='col'>Edit</th>    
                                <th scope='col'>Delete</th>    
                            </tr>
                        </thead>";
                        while($row = mysqli_fetch_assoc($result)){
                            $output .= "<tbody>
                                            <tr class=''>
                                                <td scope='row'>{$row['id']}</td>
                                                <td>{$row['student_name']}</td>
                                                <td>{$row['age']}</td>
                                                <td><button class='btn btn-success edit-btn' data-eid='{$row['id']}'>Edit</button></td>
                                                <td><button class='btn btn-danger delete-btn' data-id='{$row['id']}'>Delete</button></td>
                                            </tr>
                                        </tbody>";
                        }
                        $output .= "</table>";
                        mysqli_close($conn);
                        echo $output;
}else{
    echo "<h2>No Record Found</h2>";
}



?>