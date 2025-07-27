<?php 

// $str = "Hello world";
// // echo convert_uuencode($str);
// $encodeString =  convert_uuencode($str);
// echo $encodeString . "<br>";
// $decodeString = convert_uudecode($encodeString);
// echo $decodeString;
//======================================

// $str = "Hello";
// echo "The String :" . $str;
// echo md5($str);
// echo md5($str,true);
// echo sha1($str);
// echo sha1($str,true);


//=====================================================
 
// $str = "A 'quote' is <b>bold</b>";
// $str = '<a href="https://www.youtube.com/">Youtube</a>';
// echo $str . "<br><br>";
// echo htmlentities($str);
// echo htmlentities($str,ENT_QUOTES);
// echo htmlentities($str,ENT_NOQUOTES);
// echo htmlspecialchars($str);   
// echo htmlspecialchars($str,ENT_QUOTES);   
// $result =  htmlentities($str,ENT_NOQUOTES);
// echo html_entity_decode($result);
// $result =  htmlspecialchars($str,ENT_QUOTES);   
// echo htmlspecialchars_decode($result);
// echo "<pre>";
// print_r(get_html_translation_table());
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
// print_r(get_html_translation_table(HTML_ENTITIES));
// echo "</pre>";

//============================================

// $str = "Hello I am Abubakar Baig";
// echo $str . "<br>";
// // $newarray = addslashes($str,"Y");
// $newarray = addcslashes($str,"Aa");
// echo $newarray;
// // echo stripslashes($newarray);    


//==========================================

// $str = "Abubakar Baig";
// echo $str . "<br>";
// echo trim($str,"g");
// echo rtrim($str,"Abg");
// echo ltrim($str,"Abg");
// echo chop($str,"Abg");

//=============================================

// echo strcmp("Hello world!","Hello world!");
// echo strcmp("Hello world!","Hello");
// echo strncmp("Hello world!","Hello world!Hello",6);
// echo strcasecmp("HELLO world!","Hello world!");
// echo strcasecmp("HELLO world!","Hello world! Hello");
// echo strncasecmp("HELLO world!","Hello world!Hello",5);
// echo strnatcmp("Hello world!","Hello world!");
// echo strnatcmp("2Hello world!","10Hello world!");
// echo strnatcmp("2Hello world!","2Hello World!");
// echo strnatcasecmp("2Hello world!","2Hello World!");
// echo substr_compare("hello world!","world!",6);
// echo substr_compare("hello world!","world!",0,3);
// echo substr_compare("hello worlD!","d!",-2,2,true);
// echo similar_text("hello worlD!","Hello Abubakar");
// echo similar_text("hello worlD!","Hello Abubakar",$per);
// echo $per;
// echo strrev("Abubakar");
// echo str_shuffle("Abubakar");
// echo str_pad("Abubakar",20,".");
// echo str_pad("Abubakar",20,".",STR_PAD_LEFT);
// echo str_pad("Abubakar",20,".",STR_PAD_BOTH);
// echo str_pad("Abubakar",20,".",STR_PAD_RIGHT);
// echo str_repeat("Abubakar",2);


//=======================================

// $str = "Hello world.The world is nice";
// echo strstr($str,"world",true);
// echo stristr($str,"world",true);
// echo strchr($str,"world");
// echo strrchr($str,"world");
// echo strpbrk($str,"e");
// echo substr($str,5);
// echo str_replace("world","earth",$str);
// $find = ["Hello","world"];
// $replace = ["Hi","earth"];
// echo str_replace($find,$replace,$str);
// echo str_ireplace($find,$replace,$str);
// $color = ["red","blue","green","yellow"];
// print_r(str_replace("red","pink",$color))
// echo substr_replace($str,"earth",6,10);
// echo strtr($str,"eo","ia");
// $array = ["Hello" => "Hi","world"=>"earth"];
// echo strtr($str,$array);



//===========================
// $a = "Hello Programmer";
// $array =  str_split($a);
// $array =  str_split($a,2);
// $array =  chunk_split($a,1,".");
// $array =  strtolower($a);
// $array =  strtoupper($a);
// $array =  lcfirst($a);
// $array =  ucfirst($a);
// $array =  ucwords($a);
// $array = strlen($a);
// $array = str_word_count($a);
// $array = str_word_count($a,2);
// $array = substr_count($a,"o");
// $array = substr_count($a,"o",7);
// $array = substr_count($a,"o",7,9);
// $array = strpos($a,"Programmer");
// $array = strpos($a,"Programmer",2);
// $array = strrpos($a,"Programmer");
// $array = strripos($a,"Programmer");
// $array = stripos($a,"Programmer");

// echo "<pre>";
// print_r($array);
// echo "</pre>";

?>