<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_FILES['image'])){

             $file_name = $_FILES['image']['name'];
             $file_size = $_FILES['image']['size'];
             $file_tmp = $_FILES['image']['tmp_name'];
             $file_type = $_FILES['image']['type'];

             if(move_uploaded_file($file_tmp,"upload-images/".$file_name)){
                echo "Successfully Uploaded";
             }else{
                echo "Could not upload the file";
             }
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>