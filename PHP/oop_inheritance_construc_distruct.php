//this is oop and inheritance

<?php   

class one{ 
   
    function __destruct(){ 
        echo "this is last";
    }

    function show(){ 
        echo "this is my parent class";
    }

    function __construct(){ 
        echo "this is my constructor";
    }
}

class two extends one($name){ 
    public $name;
    public $brand;

    function display(){ 
        echo "this is my child class";
    }
}

$sub = new two();
$sub->disply();


?>