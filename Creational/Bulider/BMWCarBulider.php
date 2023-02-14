<?php

namespace Creational\Bulider;

use Creational\Bulider\Models\BMWCar;
use Creational\Bulider\Models\Car;

class BMWCarBulider implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('Body', 'bodies');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('Door', 'doors');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setParts('Engine', 'engines');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setParts('Wheel', 'wheels');
    }


    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }

}