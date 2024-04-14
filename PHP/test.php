 <?php  
//this is the test php 
function name1(){ 
    return strlen("bangladesh is my country");
}
echo name1();
echo "<br>";

function name2(){ 
    return str_word_count("bangladesh is my country");
}

echo name2();

echo "<br>";

echo strrev("bangladesh");

echo "<br>";

echo (max(10,20,30,40));

echo "<br>";

echo (min(10,20,30,40));

echo "<br>";

echo (rand(1,6));

echo "<br>";

echo strlen("this is my php code");

echo "<br>";

echo str_word_count("this is my php code");

echo "<br>";

echo substr("bangladesh",3);

echo "<br>";

echo strtoupper("bangladesh");

echo "<br>";

echo strtolower("BANGLADESH");

echo "<br>";

echo sqrt(64);

echo "<br>";

function numer(){ 
    echo is_numeric(15);
}
numer();

echo "<br>";

$d1 = date_create("28-05-2023");
$d2 = date_create("28-05-2023");

$diff = date_diff($d1,$d2);

echo $diff-> format("%Ra days");

echo "<br>";

echo $_SERVER['SERVER_NAME'];

echo "<br>";
echo $_SERVER['HTTP_HOST'];

echo "<br>";
echo $_SERVER['HTTP_REFERER'];



echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];


echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br>";
echo $_SERVER ['server_software'];




 ?>




<?php   

$x = 0;
if(isset($x)) { 
    echo "this is isset 'x' ";
}


$x = null;
if(isset($x)) { 
    echo "this is isset 'x' ";
}


function display(){ 
    $a = 1;
    if($a) { 
        echo "this is isset 'a' ";

    }
}

display();

?>