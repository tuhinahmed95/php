<?php 
class Men{ 
    public $name = "Rakib";
    public $age = "29";
    public $profession = "software enginer";

    function show(){ 
        echo "this is information of rakib"." ". $this ->name." " . $this ->age." " .$this ->profession ."<br>";
    }
}

$man = new Men();
$man->show();

$man2 = new Men("Rayhan MoOlA RajU VaI","31","developer");
$man2->show()


?>