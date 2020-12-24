<?php

abstract class Figure
{
    abstract function  Area();
    abstract function  Perimeter();

    function PrintInfo()
    {
        print 'Area: ' . $this->Area() . '<br>';
        print 'Perimeter: ' . $this->Perimeter();
    }
}

class Rectangle extends Figure
{
    private $b;
    private $a;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function Area()
    {
        return $this->a * $this->b;
    }
    function Perimeter()
    {
        return ($this->a + $this->b) * 2;
    }
}

class Square extends Rectangle
{
    function __construct($a)
    {
        parent::__construct($a, $a);
    }
}
