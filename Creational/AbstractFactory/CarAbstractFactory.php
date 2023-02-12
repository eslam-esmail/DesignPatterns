<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{

    private $price;
    private $type;

    private $tax = 100000;

    public function __construct($price, $type)
    {
        $this->price = $price;
        $this->type = $type;
    }

    public function create()
    {

        if($this->type == 'bmw'){
            return new BMWCar($this->price);
        }elseif ($this->type == 'benz'){
            return new BenzCar($this->price, $this->tax);
        }

    }

}