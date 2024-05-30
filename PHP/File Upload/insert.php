<?php

if(isset($_POST['upload'])){ 
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $image  = $_FILES['image'];
    $imgName= $_FILES['image']['name'];
 

?>