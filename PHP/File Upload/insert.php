<?php
    $conn   = mysqli_connect("localhost","root","","db_crud");
    if(isset($_POST['btn'])){ 
        $name     = $_POST['name'];
        $cname    = $_POST['cname'];
        $price    = $_POST['price'];

        $sql      = "SELECT FROM practice(name,cname,price)VALUES('$name','$cname','$price')";
        if(mysqli_query($conn,$sql) ==TRUE){ 
            header("location:view.php");
        }else{ 
            echo "data is not inserted";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div>
            <div class="col-sm-6"> 
                <form action="insert.php"> 
                    Product Name : <br>
                    <input type="text" name="name"><br><br>
                    Product Category : <br>
                    <input type="text" name="pname"><br><br>
                    Product Price : <br>
                    <input type="text" name="price"><br><br>
                    <button name="btn">Insert</button>
                </form>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>