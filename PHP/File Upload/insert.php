<?php
include'config.php';

if(isset($_POST['upload'])){ 
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $image  = $_FILES['image'];
    $imgName= $_FILES['image']['name'];
    $imgTmpName = $_FILES['image']['tmp_name'];
    $imgDes   = "images/".$imgName;
    move_uploaded_file($imgTmpName,"images/".$imgName);

    mysqli_query($conn, "INSERT INTO practice(name,price,image)VALUES('$name','$price','$imgDes')");

}

?>