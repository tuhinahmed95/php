<?php
$conn = mysqli_connect("localhost","root","","php_db");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> 

            <?php

            $sql = "SELECT * FROM student";
            $query = mysqli_query($conn,$sql);

            echo "<table class="table table-success>" <tr> 
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>E-Mail</th>

                </tr>"


            ?>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    
</body>
</html>