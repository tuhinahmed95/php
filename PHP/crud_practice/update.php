<?php
$conn  = mysqli_connect("localhost","root","","php_db");
if($_GET['id']){ 
    $getid = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id=$getid";
    $query = mysqli_query($conn,$sql);
    $data  = mysqli_fetch_assoc($query);
}

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
            <div class="col-sm-3"></div>
            <div class="col-sm-6"> 
                <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post" class="border border-success">

                Firstname <br>
                <input type="text" name="firstname" value="<?php echo $firstname?>"><br><br>
                Lastname <br>
                <input type="text" name="lastname" value="<?php echo $lastname ?>"><br> <br>
                E-Mail <br>
                <input type="text" name="email" value="<?php echo $email ?>"><br><br>
                <input type="text" name="id" value="<?php echo $id ?> "hidden><br>

                <input type="submit" name="edit" value="Edit" class="btn btn-success">

                </form>


            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>