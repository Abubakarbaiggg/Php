<?php


$data = ["red","green","blue","orange"];
$array = implode(" ",$data);
echo "<pre>";
print_r($array);
echo "</pre>";


// $data = "Hello world.It's a beautiful day.";
// $array = explode(" ",$data,4);
// echo "<pre>";
// print_r($array);
// echo "</pre>";

//===============================

// foreach(range('h','a') as $letter){
//     echo $letter . "<br>";
// }

// ==============================

// $newArray = range(1,10);
// $newArray = range(1,100,10);
// $newArray = range('a','h');
// $newArray = range('h','a');
// echo "<pre>";
// print_r($newArray);
// echo "</pre>"; 

//=================================

// $firstname = "Abubakar";
// $lastname = "Baig";
// $age = "20";
// $gender = "Male";
// $country = "Pakistan";
// $extra = ["gender","country"];
// $newArray = compact("firstname","lastname","age",$extra);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

//=====================================

// $a = "orange";
// $color  = ['a'=>'red','b'=>'green','c'=>'blue'];
// // extract($color);
// // extract($color,EXTR_OVERWRITE);
// // extract($color,EXTR_SKIP);
// // extract($color,EXTR_PREFIX_SAME,"test");
// extract($color,EXTR_PREFIX_ALL,"test");
// echo "value of a : $a <br>" ;
// echo "value of a : $test_a <br>" ;
// echo "value of b : $test_b <br>";
// echo "value of c : $test_c <br>";
//============================================

// $color = ['orange','banana','grapes','apple'];
// list($a,$b,$c,$d)=$color;

// echo "Value of a : $a <br>";
// echo "Value of b : $b <br>";
// echo "Value of c : $c <br>";
// echo "Value of d : $d <br>";


//==============================================
// $food = ['orange','banana','grapes','apple'];
// echo current($food) . "<br>";
// echo key($food) . "<br>";
// echo pos($food) . "<br>";
// next($food);
// echo current($food) . "<br>";
// prev($food);
// echo current($food) . "<br>";
// end($food);
// echo current($food) . "<br>";
// echo "<pre>";
// print_r(each($food));
// echo "</pre>";
// echo current($food) . "<br>";
// reset($food);
// echo current($food);
// $food = [
//     "d" => "Lemon",
//     "a" => "Orange",
//     "b" => "Banana",
//     "c" => "Apple",
// ];
// asort($food);
// arsort($food);
// ksort($food);
// krsort($food);
// echo "<pre>";
// print_r($food);
// echo "</pre>";

// $food = ['orange','banana','grapes','apple'];
// rsort($food);
// sort($food);
// echo "<pre>";
// print_r($food);
// echo "</pre>";

// $name = ["Ram","Mohan","Salman"];
// $age = ["34","35","36"];
// $newArray = array_combine($name,$age);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $fruit = ["a" => "orange","b" => "mango","c" =>"banana"];
// $veggie = ["b"=>[
//     'carrot'=>[
//         'red','green','blue'
//         ]
//     ],   
//             "e"=>'pea',
//             55,
//             66
//         ];
// $newArray = array_merge_recursive($fruit,$veggie);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $fruit = ["a" => "orange","b" => "mango","c" =>"banana"];
// $veggie = ["b"=>'carrot',"e"=>'pea'];
// $newArray = array_merge_recursive($fruit,$veggie);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $fruit = ["a" => "orange","b" => "mango","c" =>"banana"];
// $veggie = ["d"=>'carrot',"e"=>'pea'];
// $newArray = array_merge($fruit,$veggie);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// $fruit = ["orange","mango","banana"];
// $veggie = ['carrot','pea'];
// $newArray = array_merge($fruit,$veggie);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $fruit = ["orange","mango","banana"];
// array_unshift($fruit,"apple","lemon");
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";



// $fruit = ["orange","mango","banana"];
// array_shift($fruit);
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";


// $fruit = ['apple','mango','banana'];
// array_push($fruit,"grapes");
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";

// $fruit = ['apple','mango','banana'];
// array_pop($fruit);
// echo "<pre>";
// print_r($fruit);
// echo "</pre>";


// $array1 = [
//     [
//         "a"=>["red"],
//         "b"=>["green","pink"]
//     ]
// ];
// $array2 = [
//     [
//         "a"=>["yellow"],
//         "b"=>["black"]
//     ]
// ];

// $newArray = array_replace_recursive($array1,$array2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// $fruit = ["orange","apple","mango","grapes"];
// $veggie = ["a"=>'carrot',"b"=>'pea'];
// $color = ['red','green','blue'];

// $newArray = array_replace($fruit,$veggie,$color);
// print_r($newArray);

// $food = array("a"=>"orange","b"=>"banana","c"=>"apple","d"=>"33");
// echo array_search("33",$food);


// $food = array("orange","banana","apple","33");
// echo array_search("33",$food);


// $data = [
//     ['p','h'],
//     ['p','r'],
//     'o'
// ];
// if(in_array(['p','h'],$data,true)){
//     echo "Find Successfully";
// }else{
//     echo "Can't Find";
// };

// $food = array("orange","banana","apple","33");

// if(in_array(33,$food,true)){
//     echo "Find Successfully";
// }else{
//     echo "Can't Find";
// };
//=================================
// $age = [1 => 12,2=>13,3=>14,4=>15,5=>16];
// foreach($age as $key => $value){
//     echo $key . $value;
// }
// ======================
// $data = [1,2,3,4,5];
// for($a=0; $a<5; $a++){
//     echo $data[$a];
// }
?>
