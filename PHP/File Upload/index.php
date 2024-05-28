<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud With File Upload</title>
    <link rel="stylesheet" href="style.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
     <center> 
        <div class="main"> 
            <form action="insert.php" method="POST" enctype="multipart/form-data"> 
                <label for="name">Name</label>
                <input type="text" name="name"><br><br>
                <label for="price">Price</label>
                <input type="text" name="price"><br><br>
                <label for="image">Image</label>
                <input type="file" name="image"><br><br>
                <button name="upload">Upload</button>
            </form>
        </div>
     </center>
    
     <!-- fetch data -->

     <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

        include'config.php';

        $sql  = mysqli_query($conn, "SELECT * FROM practice");
        while($data = mysqli_fetch_array($sql)){ 
            echo
                "<tr> 
                    <td>$data[id]</td> 
                    <td>$data[name]</td>
                    <td>$data[price]</td>
                    <td><img src='$data[image]' width='200px' height='70px'></td>
                    <td> 
                    <span class='btn btn-success'><a href='edit.php?deleteid=$data[id]' class='text-decoration-none text-white'>Edit</a></span>
                    <span class='btn btn-danger'><a href='view.php?deleteid=$data[id]' class='text-decoration-none text-white'>Delete</a></span>
                    </td>
                   

                </tr>";
                    
            
                
        }

    ?>
  
  </tbody>
</table>
</body>
</html> -->