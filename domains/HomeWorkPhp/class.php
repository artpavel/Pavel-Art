<?php

abstract class Product
{
    abstract function  getNameOfProduct();
    abstract function  calculateOfPrice();

    function Display()
    {
        echo '<pre>';
        print 'Title product: ' . $this->getNameOfProduct() . '<br>';
        echo '</pre>';
        echo '<pre>';
        print 'Price product: ' . $this->calculateOfPrice();
        echo '</pre>';
    }
}

// Клас штани
class Pants extends Product
{
    // Поля класу
    private $title;
    private $length;
    private $costOfMaterial;


    // Гетери і сетери
    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getLength()
    {
        return $this->length;
    }

    function setLength($length)
    {
        $this->length = $length;
    }

    function getCostOfMaterial()
    {
        return $this->costOfMaterial;
    }

    function setCostOfMaterial($costOfMaterial)
    {
        $this->costOfMaterial = $costOfMaterial;
    }

    // Конструктор
    function __construct($title, $length, $costOfMaterial)
    {
        $this->title = $title;
        $this->length = $length;
        $this->costOfMaterial = $costOfMaterial;
    }

    // Абстрактні методи
    function getNameOfProduct()
    {
        return $this->title;
    }

    function calculateOfPrice()
    {
        return $this->length * $this->costOfMaterial . ' uan <br>';
    }
}

// Клас сорочка
class Shirt extends Product
{
    // Поля класу
    private $title;
        private $size;
    private $costOfMaterial;
     private $discount;



    // Гетери і сетери
    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getSize()
    {
        return $this->size;
    }

    function setLength($size)
    {
        $this->size = $size;
    }

    function getCostOfMaterial()
    {
        return $this->costOfMaterial;
    }

    function setCostOfMaterial($costOfMaterial)
    {
        $this->costOfMaterial = $costOfMaterial;
    }

    function getDiscount()
    {
        return $this->discount;
    }

    function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    // Конструктор
    function __construct($title, $size, $costOfMaterial, $discount)
    {
        $this->title = $title;
        $this->size = $size;
        $this->costOfMaterial = $costOfMaterial;
        $this->discount = $discount;
    }

    // Обчислення знижки
    function calculateOfDiscount()
    {
        return $this->size * $this->costOfMaterial / 100 * $this->discount;
    }

    // Абстрактні методи
    function getNameOfProduct()
    {
        return $this->title;
    }

    function calculateOfPrice()
    {
        return $this->size * $this->costOfMaterial - $this->calculateOfDiscount() . ' uan <br>';
    }
}