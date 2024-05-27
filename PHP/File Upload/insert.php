<?php
    $conn = mysqli_connect("localhost","root","","crud_practice");
    if(isset($_POST('btn')){ 
        $name    = $_POST['name'];
        $image   = $_POST['image'];
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
                <form action="#" method="POST" enctype=""> 
                    Name : <br>
                    <input type="text" name="name"><br><br>
                    Image : <br>
                    <input type="file" name="image"><br><br>
                    Email : <br>
                    <input type="text" name="email"><br><br>
                    <input type="submit" name="btn" value="Insert">
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>