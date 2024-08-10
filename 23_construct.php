<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>23</title>
</head>
<body>

<?php

class Car // crea clase
{

    /* A partir de la versión 8 metemos todo en el constructor. Así:
    public function __construct(
        private int $wheel, //encapsulado con private
        private string $colour,
        private int $engine,     
    ){}
    */

    private int $wheel; //encapsulado con private
    private string $colour;
    private int $engine;

    /* El constructor te da el estado inicial del objeto cuando se instancia */

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
   
}

/* instancia clase, llama al constructor y le asigno nombre */

$renault = new Car();
$volvo = new Car();
$tesla = new Car();

$volvo->turn(); // ejecuto el método de la clase

?>

</body>
</html>