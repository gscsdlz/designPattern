<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:47
 */

namespace designPattern\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;

    abstract protected function createVehicle($type);

    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }
}