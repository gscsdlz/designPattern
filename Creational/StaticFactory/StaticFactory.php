<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 11:36
 */

namespace designPattern\Creational\StaticFactory;


class StaticFactory
{
    public static function factory($type)
    {
        $className = __NAMESPACE__  . '\Format' . ucfirst($type);
        echo $className;
        if (!class_exists($className)) {
           throw new \InvalidArgumentException("Missing format class.");
        }

        return new $className();
    }
}