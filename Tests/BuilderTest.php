<?php

namespace Tests;

use Creational\Bulider\BenzCarBulider;
use Creational\Bulider\BMWCarBulider;
use Creational\Bulider\CarProducer;
use Creational\Bulider\Models\BenzCar;
use Creational\Bulider\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testProduceBMWCar(){

        $carBuilder = new BMWCarBulider();
        $CarProducer = new CarProducer($carBuilder);
        $myCar = $CarProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);

    }

    public function testProduceBenzCar(){

        $carBuilder = new BenzCarBulider();
        $CarProducer = new CarProducer($carBuilder);
        $myCar = $CarProducer->produceCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);

    }

}