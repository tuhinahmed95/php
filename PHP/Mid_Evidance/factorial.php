<html>
<head>
<title> Factorial Program</title>
</head>
<body>
<form method="POST">
<label>Enter a number</label>
<input type="text" name="number" />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
// example to demonstrate factorial of a number using form
if($_POST['submit'] == "Submit") {
$input = $_POST['number'];
$fact=1;
//iterating using for loop
for($i=$input; $i>=1;$i--) {
$fact = $fact * $i;
}
// Print output of the program
echo '<br>'. 'The factorial of the number '.$input.' is ' . $fact;
}
?>
</body>
</html>