<?php 
include 'database.php';
$obj = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-data.php" method="post">
        <label for="">Name</label>
        <input type="text" name="sname"><br><br>
        <label for="">Age</label>
        <input type="text" name="sage"><br><br>
        <label for="">City</label>
        <select name="scity" id="">
            <?php 
                $obj->select('citytb');
                $result = $obj->getResult();
                foreach($result as list("cid"=>$cid,"cname"=>$cname)){
                    echo "<option value='$cid'>$cname</option>";
                }
            ?>
        </select>
        <input type="submit" value="Save">
    </form>
</body>
</html>
