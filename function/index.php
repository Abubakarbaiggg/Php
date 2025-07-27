<?php 

$x = 10;
$y = 2;
function test(){
    global $x,$y;
    $x = $x + $y;
}
test();
echo $x;


// $x= 10;

// function test(){
//     global $x;
//     echo "This is my value" . $x;
// }
// test();
// echo "This is my value" . $x;

//=============================
// function factorial($n){
//     if($n == 0){
//         return 1;
//     }else{
//         return $n * factorial($n - 1);
//     }
// }
// echo factorial(5);  


// function display($number){
//     if($number <= 5){
//         echo $number. "<br>";
//         display($number + 1);
//     }
// }
// display(2);

// =============================
// $fullname = function($name){
//     echo "My name is " . $name;
// };
// $fullname("abubakar");

// function wow($name){
//     echo "My name is " . $name;
// }
// $username = "wow";
// $username("abubakar")

//=========================
// function testing(&$string){
//     $string .= " and something extra.";
// }
// $str = "This is a string";
// testing($str);
// echo $str;

//==============================

// function sum($math,$eng,$urdu){
//      return $math  + $eng + $urdu; 
// }
// function percentage($value){
//     return $value/3 . "%"; 
// }
// $value = sum(10,33,20);
// echo percentage($value);


// function hello($fname,$lname ){
//     return "$fname $lname "; 
// }
// $name = hello("Abubakar","Baig");
// echo $name . "this is my name";

// ========================
// function sum($a = 4,$b){
//     echo $a + $b;
// }
// sum(5,3);
// function hello($name){
//     echo "My Name Is ".$name;
// }
// hello("Abubakar");
//=====================
// function Hello(){
//     echo "Abubakar";
// }

// Hello();
// Hello();
?>