<?php

class Car
{
    /* Accesible desde cualquier sitio */

    public string $colour;

    /* con private sólo es accesible desde la clase. Si queremos
        acceder a ellas utilizamos métodos getter y setters */

    private int $wheels;
    
    /* con protected es accesible desde la clase y las hijas.
        Accede también con getter y setters */

    protected int $engine;

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

    /* Esto es un getter, con su mítico return */
    
    public function getWheels(){
        return $this->wheels;
    }
}

class Truck extends Car
{
    public function __construct(){
        $this->wheels = 8;
        $this->colour = "Grey";
        $this->engine = 2600;
    }

    public function setColour($truckColour, $truckName){
        $this->colour = $truckColour;
        echo "Colour of " . $truckName . ": " . $this->colour . "<br>";
    }

    public function start(){
        parent::start();
        echo "Truck started<br>";
    }

    public function getEngine(){
        return $this->engine;
    }

}

?>
