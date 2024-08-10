<?php

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

/* Extends para heredar */

class Truck extends Car
{
    public function __construct(){
        $this->wheels = 8;
        $this->colour = "Grey";
        $this->engine = 2600;
    }

    /* Machaca metodo padre con el mismo nombre*/

    public function setColour($truckColour, $truckName){
        $this->colour = $truckColour;
        echo "Colour of " . $truckName . ": " . $this->colour . "<br>";
    }

    /* parent para que 1º ejecute todo lo de la clase padre
        y después lo que añadamos */
        
    public function start(){
        parent::start();
        echo "Truck started<br>";
    }

}

?>
