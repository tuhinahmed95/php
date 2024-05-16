<?php
$conn = mysqli_connect("localhost","root","","php_db");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-2"></div>
            <div class="col-sm-8"> 

            <?php

            $sql = "SELECT * FROM student";
            $query = mysqli_query($conn,$sql);

            ec

                while($data = mysqli_fetch_assoc($query)){ 
                    $id   = $data['id'];
                    $firstName = $data['firstname'];
                    $lastName  = $data['lastname'];
                    $email     = $data['email'];

                echo "<tr> 
                    <td>$id</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$email</td>
                    <td><span class='btn btn-success'>Edit</span> <span class='btn btn-danger'>Delete</span></td>
                    </tr>";
                }


            ?>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    
</body>
</html>