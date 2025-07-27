<?php

include 'database.php';
$obj = new Database();
//========= INSERT DATA ================
// $obj->insert('students',['student_name'=>'Sufyan khan','city'=>'Karachi','dob'=>'02-01-2005']);
// echo "Insert result is : ";
// print_r($obj->getResult());

// //========= UPDATE DATA ================
// $obj->update('students',['student_name'=>'Sufyan','city'=>'Karachi','dob'=>'02-01-2005'],'id="11"');
// echo "Update result is : ";
// print_r($obj->getResult());

//========= DELETE DATA ================
// $obj->delete('students','id="11"');
// echo "Delete result is : ";
// print_r($obj->getResult());


//========= SQL DATA ================
// $obj->sql("SELECT * FROM students");
// echo "Sql result is : ";
// print_r($obj->getResult());

//========= JOIN TABLE ================
$join = "citytb ON students.city = citytb.cid";
$colName = "students.id,students.student_name,students.age,citytb.cname";
$limit = 1;

//========= SELECT DATA ================
$obj->select('students', $colName, $join, null, null, $limit);
echo "Select result is : ";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";


//========= PAGINATION DATA ================
echo $obj->pagination('students', $join, null, 2);

?>