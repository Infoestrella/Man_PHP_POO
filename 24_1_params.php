<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>24</title>
</head>
<body>

<?php

class Car // crea clase
{

    private int $wheel; //encapsulado con private. Sólo accesible desde dentro
    private string $colour;
    private int $engine;

    /* El constructor da el estado inicial del objeto cuando se instancia */

    public function __construct(){
        $this->wheel = 4;
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

/* instancia clase, llama al constructor y le asigno nombre */

$renault = new Car();
$volvo = new Car();
$tesla = new Car();

$volvo->turn(); // ejecuta el método de la clase
$volvo->setColour("Red", "Volvo"); // pasa parámetros

?>

</body>
</html>