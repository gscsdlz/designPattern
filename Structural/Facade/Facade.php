<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 10:01
 */

namespace designPattern\Structural\Facade;


abstract  class Facade
{
    public static function __callStatic($func, $parameters)
    {
        $instanceName = static::getFacadeAccessor();
        $instance = FacadeContainer::getInstance($instanceName);

        return $instance->$func(...$parameters);
    }

    public static function getFacadeAccessor()
    {
        throw new \RuntimeException("Facade does not implement getFacadeAccessor method.");
    }
}