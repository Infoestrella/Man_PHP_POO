<?php

/* Tiene 2 clases. Para hacer include en 24_2_3*/

class Car
{

    public int $wheels;
    private string $colour;
    private int $engine;

    public function __construct(){
        $this->wheels = 4;
        $this->colour = "";
        $this->engine = 1600;
    }
    
    public function start(){
        echo "Iam starting<br>";
    }

    public function turn(){
        echo "Iam turning<br>";
    }

    public function stop(){
        echo "Iam stopping<br>";
    }

    public function setColour($carColour, $carName){
        $this->colour = $carColour;
        echo "Colour of " . $carName . ": " . $this->colour . "<br>";
    }
   
}

class Truck
{

    public int $wheels;
    private string $colour;
    private int $engine;

    public function __construct(){
        $this->wheels = 8;
        $this->colour = "Grey";
        $this->engine = 2600;
    }
    
    public function start(){
        echo "Iam starting<br>";
    }

    public function turn(){
        echo "Iam turning<br>";
    }

    public function stop(){
        echo "Iam stopping<br>";
    }
   
}
?>
