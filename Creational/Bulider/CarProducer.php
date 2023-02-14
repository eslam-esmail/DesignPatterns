<?php

namespace Creational\Bulider;

class CarProducer
{
    /**
     * @var CarBuilderInterface $builder
     */
    private $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function produceCar(){
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addWheel();
        $this->builder->addEngine();
        return $this->builder->getCar();
    }

}