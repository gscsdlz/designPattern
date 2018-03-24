<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:48
 */

namespace designPattern\Creational\SimpleFactory;


class ConcreteFactory
{
    protected $typeList;

    public function __construct()
    {
        $this->typeList = [
          'bicycle' => __NAMESPACE__ . '\Bicycle',
          'other' => __NAMESPACE__. '\Scooter',
        ];
    }

    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not a valid vehicle");
        }

        $className = $this->typeList[$type];

        return new $className();
    }
}
