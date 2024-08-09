<?php

class buyVehicle
{
    private int $basePrice;

    /* static hace que pertenezca a la clase, no a los objetos. Se
        llama con self::[campo]. Mira en la función finalPrice(). O
        Bien con [clase]::[campo] desde fuera de la clase, siempre
        que no sea protected o private buyVehicle::$discount */
    private static int $discount = 0;

    public function __construct($range)
    {
        if ($range == "urban"){
            $this->basePrice = 10000;
        }elseif ($range == "compact"){
            $this->basePrice = 20000;
        }elseif ($range == "sedan"){
            $this->basePrice = 30000;
        }
    }

    /* Método static */
    static public function govermentDiscount()
    {
        if(date("m-d-y") > "08-09-2024"){
            self::$discount = 4500;
        }
    }

    public function climateControl()
    {
        $this->basePrice += 2000;
    }

    public function gps()
    {
        $this->basePrice += 2500;
    }

    public function upholstery($colour)
    {
        if ($colour == "white"){
            $this->basePrice += 3000;
        }elseif ($colour == "beige"){
            $this->basePrice += 3500;
        }else{
            $this->basePrice += 5000;
        }
    }

    public function finalPrice(){
        $finalValue = $this->basePrice - self::$discount;
        return $finalValue;
    }

}

?>
