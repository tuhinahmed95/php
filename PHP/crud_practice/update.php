<?php 
$conn = mysqli_connect('localhost','root','','php_db');
if ($_GET['id']){ 
    $getid = $_GET['id'];
   $sql = "SELECT * FROM student WHERE id=$getid";
   $query = mysqli_query($conn, $sql);
   $data = mysqli_fetch_assoc($query);
   $id = $data['id'];
   $firstname = $data['firstname'];
   $lastname = $data['lastname'];
   $email = $data['email'];
}
     if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
         $email = $_POST['email'];
     $sql1 = "UPDATE users SET name='$firstname',
                                age='$lastname',
                                email='$email' where id = '$id' ";
     if(mysqli_query($conn, $sql1) == TRUE){ 
        header('location:view.php');
        echo "DATA update";
     }else{ 
        echo $sqli1. "Data not update";
     }
    }
    


?>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container"> 
    <div class="row"> 
        <div class="col-sm-3"></div>
        <div class="col-sm-6 pt-4 mt-4 border border-success mt-4 p-4"> 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" > 
        Firstname:<br>
        <input type ="text" name ="firstname" value="<?php echo $firstname ?>"><br><br>
        Lastname:<br>
        <input type ="text" name ="lastname" value="<?php echo $lastname ?>"><br><br>
        Email:<br>
        <input type ="email" name ="email" value="<?php echo $email ?>"><br><br>
        <input type ="text" name ="id" value =" <?php echo $id ?>" hidden><br><br>
        <input type ="submit" name ="edit" value="Edit" class="btn btn-success">
    </form>
    </div>
        <div class="col-sm-3"></div>
    </div>
   </div>
</body>
</html>