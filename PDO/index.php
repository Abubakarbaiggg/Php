<?php 


$db_name = "mysql:host=localhost;dbname=php_projects";
$username = "root";
$password = "";

$conn = new PDO($db_name,$username,$password);  
$city = "karachi";
$id = 1;
$sql = $conn->prepare("SELECT * FROM students where city = ? AND id > ?");
// $sql->bindParam(1,$city,PDO::PARAM_STR);
// $sql->bindParam(2,$id,PDO::PARAM_INT);
$sql->bindValue(1,$city,PDO::PARAM_STR);
$sql->bindValue(2,$id,PDO::PARAM_INT);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
    foreach ($result as $row) {
      echo "{$row['id']} -{$row['student_name']} - {$row['city']} - {$row['dob']} <br>";
    }
}

//  echo "<pre>";
    // print_r($result);
    // echo "</pre>";


// while($row = $sql->fetch(PDO::FETCH_NUM)){
//     // echo "{$row['id']} -{$row['student_name']} - {$row['city']} - {$row['dob']} <br>";
//     echo "{$row[0]} -{$row[1]} - {$row[2]} - {$row[3]} <br>";

//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
// }

// =======================================================================
// $db_name = "mysql:host=localhost;dbname=php_projects";
// $username = "root";
// $password = "";

// $conn = new PDO($db_name,$username,$password);  
// $sql = $conn->query("SELECT * FROM students");

// $result = $sql->fetchAll(PDO::FETCH_NUM);

// if(count($result)){
//     foreach ($result as $row) {
//         echo "{$row[1]} <br>";
//     }
// }

// //  echo "<pre>";
//     // print_r($result);
//     // echo "</pre>";


// // while($row = $sql->fetch(PDO::FETCH_NUM)){
// //     // echo "{$row['id']} -{$row['student_name']} - {$row['city']} - {$row['dob']} <br>";
// //     echo "{$row[0]} -{$row[1]} - {$row[2]} - {$row[3]} <br>";

// //     // echo "<pre>";
// //     // print_r($row);
// //     // echo "</pre>";
// // }

?>