<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $cookie_name = "User";
    $cookie_value = "Abubakar";
    setcookie($cookie_name,$cookie_value,time() + (86400 * 30) , "/");
    if(!isset($_COOKIE['User'])){
        echo "Cookie is not set.";
    }else{
    echo $_COOKIE['User'];
    }
?>    

</body>
</html>