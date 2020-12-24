
<?php

class Car
{
    private $name; // privat, protected
    private $color;
    private $price;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function setPrice($price)
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            echo "price is invalide";
        }
    }

    function getPrice()
    {
        return $this->price;
    }





    function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}

// Новий клас
class SportCar extends Car
{
    private $power;

    function getPower()
    {
        return $this->power;
    }

    function setPower($power)
    {
        $this->power = $power;
    }

    // зверни увагу на запис конструктора і слово parent::
    function __construct($name, $color, $price, $power)
    {
        parent::__construct($name, $color, $price);
        $this->power = $power;
    }
}

// Від цього класу ми можемо знову наслідуватися
class Exclusive extends SportCar
{
    private $passagers;

    function __construct($name, $color, $price, $power, $passagers)
    {
        parent::__construct($name, $color, $price, $power);
        $this->passagers = $passagers;
    }

    /**
     * Get the value of passagers
     */
    public function getPassagers()
    {
        return $this->passagers;
    }

    /**
     * Set the value of passagers
     *
     * @return  self
     */
    public function setPassagers($passagers)
    {
        $this->passagers = $passagers;

        return $this;
    }
}








?>