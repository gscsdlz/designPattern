<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:15
 */

namespace designPattern\Creational\Builder;

class BikeBuilder implements BuilderInterface
{

    protected $bike;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->bike = new Parts\Bike();
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->bike->setPart('engine', new Parts\Engine);
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('rearWheel', new Parts\Wheel());
    }

    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->bike;
    }
}