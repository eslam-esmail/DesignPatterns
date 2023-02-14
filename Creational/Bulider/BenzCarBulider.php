<?php

namespace Creational\Bulider;

use Creational\Bulider\Models\BenzCar;
use Creational\Bulider\Models\Car;

class BenzCarBulider implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('Body', 'benz-bodies');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('Door', 'benz-doors');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setParts('Engine', 'benz-engines');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setParts('Wheel', 'benz-wheels');
    }


    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }

}