<?php
$conn = mysqli_connect('localhost','root','','testdb');

if(isset($_GET['id'])){ 
    $getid = $_GET['id'];

    $sql = "SELECT * FROM student WHERE id= $getid";

    $query = mysqli_query($conn, $sql);

   if( $data = mysqli_fetch_assoc($query)){

        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
   }
}

if(isset($_POST['edit'])){ 
    $editid = $_POST['edit'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql1 = "UPDATE student SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id= $editid";

    if(mysqli_query($conn, $sql1)==TRUE){ 
        echo 'data update successfully';
        header('location:view.php');
    }else { 
        echo 'data not updated';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-sm-3"></div>
            
            <div class="col-sm-6 pt-5 border border-success mt-3">
                <h3 class="bg-success">Update User's</h3>
                <form action="" method="POST">
                    Firstname : <br>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>

                    Lastname : <br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>"><br><br>

                    Email : <br>
                    <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
                    <input type="text" name="email" value="<?php echo $id?>" hidden><br><br>

                    <input type="submit" value="insert" name="edit" class="btn btn-success">
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>