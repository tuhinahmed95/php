<?php
$conn   = mysqli_connect("localhost","root","","php_db");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="contaniner"> 
        <div class="row"> 
            <div class="col-sm-3"></div>

            <div class="col-sm-6 mt-4 pt-4 border border-success"> 
                <a href="insert.php" class='text-decoration-none'>Add Student</a>
                <h3 class='text-white text-center bg-success'>User's Information</h3>
               <?php 
               $sql    = "SELECT * FROM student";
               $query  = mysqli_query($conn,$sql);
               echo "<table class='table table-success'> 
                    <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Action</th>
                    </tr>";
              while ($data = mysqli_fetch_assoc($query)){
               $id        = $data['id'];
               $firstname = $data['firstname'];
               $lastname  = $data['lastname'];
               $email     = $data['email'];
               
               echo "<tr>
                        <td>$id</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$email</td>
                        <td><span class='btn btn-success'><a href'edit.php?id=$id'>Edit</span></a> 
                            <span class='btn btn-danger'><a href=''></a>Delete</span></a>
                        </td>
                        
                        </tr>";
              }
               ?>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>