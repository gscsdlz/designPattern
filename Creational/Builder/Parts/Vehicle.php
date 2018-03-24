<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:20
 */

namespace designPattern\Creational\Builder\Parts;


abstract class Vehicle
{
    protected $data;

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}