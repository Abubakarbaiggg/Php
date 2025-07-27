<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Name:</label>
        <input type="text" name="fname"><br>
        <label>Age:</label>
        <input type="text" name="age"><br>
        <input type="submit" name="save" >
    </form>

    <?php 
        if(isset($_POST['save'])){
            echo $_POST['fname'] . "<br>";
            echo $_POST['age'] . "<br>";
        }
    ?>
</body>
</html>
