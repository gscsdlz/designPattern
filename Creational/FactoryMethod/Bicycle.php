<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:53
 */

namespace designPattern\Creational\FactoryMethod;


class Bicycle implements VehicleInterface
{

    protected  $color;

    public function setColor($rgb)
    {
        // TODO: Implement setColor() method.
        $this->color = $rgb;
    }
}