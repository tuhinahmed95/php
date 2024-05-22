<?php
$conn   = mysqli_connect("localhost","root","","php_db");
if(isset($_GET['deleteid'])){ 
    $deleteid  = $_GET['deleteid'];

    $sql   ="DELETE FROM student WHERE id = $deleteid";

    if(mysqli_query($conn, $sql) == TRUE){ 
        header("location:view.php");
    }
}


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
            <div class="col-sm-1"></div>

            <div class="col-sm-10 mt-4 pt-4 border border-success"> 
                <a href="insert.php" class='text-decoration-none'>Add Student</a>
                <h3 class='text-white text-center bg-success mt-4 pt-4'>User's Information</h3>
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
              while($data = mysqli_fetch_assoc($query)){
               $id        = $data['id'];
               $firstname = $data['firstname'];
               $lastname  = $data['lastname'];
               $email     = $data['email'];
               
               echo "<tr>
                        <td>$id</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$email</td>
                        <td> 
                        <span class='btn btn-success'><a href='edit.php?id=$id' class='text-decoration-none text-white'>Edit</a></span>
                        <span class='btn btn-danger'><a href='view.php?deleteid=$id' class='text-decoration-none text-white'>Delete</a></span>
                        </td>
                        
                        </tr>";
              }
               ?>
            </div>

            <div class="col-sm-1"></div>
        </div>
    </div>
    
</body>
</html>