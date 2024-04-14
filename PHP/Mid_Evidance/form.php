<?php 
//this is oop class 
require_once("Oop_class.php");

if(isset($_POST["btn"])){ 

    $name= $_POST["name"];
    $skill = $_POST["skill"];
    $country = $_POST["country"];
    $position = $_POST["position"];

    $information = new Player($name,$skill,$country,$position);
    $information->save();
    echo "Success";
 
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

<form action="#" method = "Post"> 
    <fieldset style = "width = 400px, height = 400px" > 
        <legend>User Information</legend>
  
   Name : <input type="text" name = "name"><br><br>
    Skil : <input type="text" name = "skill"> <br><br>
   Country : <input type="text" name = "country"><br><br>
   Position <input type="text" name = "position"><br><br>
    <input type="submit" name = "btn">

    </fieldset>


</form>

<?php  

Player::show_info();

?>
    
</body>
</html>