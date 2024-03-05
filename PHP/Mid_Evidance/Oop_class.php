<?php  

class Player{ 
   
    private $name;
    private $skill;
    private $country;
    private $position;

    public static $file_name="store.txt";

    public function __construct($_name,$_skill,$_country,$_position){ 
      
        $this->name = $_name;
        $this->skill =$_skill;
        $this->country = $_country;
        $this->position = $_position;
    }
    public function disply(){ 
        return  $this->name.",".$this->skill.",".$this->country.",".$this->position.PHP_EOL;
    }    

    public function save(){ 
        $plyerinfo = file(self::$file_name);

        file_put_contents(self::$file_name,$this->disply(),FILE_APPEND);
    }

    public static function show_info(){ 
        $playerinfo=file(self::$file_name);
   
    echo " <b>  NAME | skill | country | postition <b><br>";

        foreach($playerinfo as $player){ 
            list($name,$skill,$country,$position)=explode(",",trim($player));
            echo "$name | $skill | $country | $position <br>";
        }

    }
}
   

?>