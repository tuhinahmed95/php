<?php
$conn   = mysqli_connect("localhost","root","","php_db");
if($_GET['id']){ 
    $getId = $_GET['id'];

    $sql     = "SELECT FROM student WHERE id = $getId";
    $query   = mysqli_query($conn,$sql);
    $data    = mysqli_fetch_assoc($query);

    $id        = $data['id'];
    $firstName = $data['firstname'];
    $lastName  = $data['lastname'];
    $email     = $data['email'];
}

if(isset($_POST['edit'])){ 
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $Email      = $_POST['email'];

    $sql1      = "UPDATE FROM student SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE id = $id";

    if(mysqli_query($conn,$sql1) == TRUE){ 
        echo "data updated";
    }
    else{ 
        echo "data is not update";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="contaniner"> 
        <div class="row"> 
            <div class="col-sm-3"></div>

            <div class="col-sm-6 mt-4 pt-4 border border-success"> 
                <h3 class="bg-success text-white">Registration Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> 
                    Firstname : <br>
                    <input type="text" name="firstname" value='<?php echo $firstName ?>'><br><br>
                    Lastname : <br>
                    <input type="text" name="lastname" value='<?php echo $lastName ?>'><br><br>
                    Email : <br>
                    <input type="text" name="email" value='<?php echo $email ?>'><br><br>
                    <input type="text" name="id" value="<?php echo $id?>" hidden><br><br>
                    <input type="submit" name="edit" value="Edit" class="btn btn-success">
                </form>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>