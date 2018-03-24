<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:15
 */

namespace designPattern\Creational\Builder;

class CarBuilder implements BuilderInterface
{

    protected $car;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car = new Parts\Car();
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->car->setPart('engine', new Parts\Engine);
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('whellRR', new Parts\Wheel());
    }

    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->car;
    }
}