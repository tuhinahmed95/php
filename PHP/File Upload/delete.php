<?php

include'config.php';
$id = $_GET['deleteid'];
mysqli_query($conn,"DELETE FROM student WHERE id='$id'");

?>