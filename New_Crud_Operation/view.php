<?php
$conn = mysqli_connect('localhost','root','','testdb');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-sm-1"></div>
            
            <div class="col-sm-10 pt-5 border border-success mt-3">
               <?php
                   $sql =  "SELECT * FROM student";
                   $queary = mysqli_query($conn,$sql);
                   echo"<table class='table table-success'>
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>";
                   
                  while( $data = mysqli_fetch_assoc($queary)){;

                   $id = $data['id'];
                   $firstname = $data['firstname'];
                   $lastname = $data['lastname'];
                   $email = $data['email'];

                   echo "<tr>
                            <td>$id</td>
                            <td>$firstname</td>
                            <td>$lastname</td>
                            <td>$email</td>
                            <td>Edit Delete</td>
                        </tr>";

                  }
               ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</body>
</html>