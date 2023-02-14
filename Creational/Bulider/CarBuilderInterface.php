<?php

namespace Creational\Bulider;

interface CarBuilderInterface
{

    public function addDoors();
    public function addBody();
    public function addWheel();
    public function addEngine();
    public function createCar();
    public function getCar();


}