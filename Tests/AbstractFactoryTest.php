<?php

namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateCar(){
        $carFactory = new CarAbstractFactory(500000, 'bmw');
        $bmw = $carFactory->create();

        $this->assertInstanceOf(BMWCar::class, $bmw);
    }

}