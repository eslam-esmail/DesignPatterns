<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface
{

    private $price;
    private $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function CalculatePrice()
    {
        // TODO: Implement CalculatePrice() method.

        return $this->price + 20000 + $this->tax;
    }

}