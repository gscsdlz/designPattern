<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:49
 */

namespace designPattern\Creational\FactoryMethod;


class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        // TODO: Implement createVehicle() method.
        switch ($type) {
            case parent::CHEAP :
                return new Bicycle();
                break;
            case parent::FAST :
                $obj = new Porsche();
                $obj->addTuningAMG();

                return $obj;
                break;
            default :
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}