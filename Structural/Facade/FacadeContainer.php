<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:46
 */

namespace designPattern\Structural\Facade;


class FacadeContainer
{
    private static $container;

    public static function init($args)
    {
        foreach ($args as $key => $value) {
            self::$container[$key] = new $value();
        }
    }

    private function __construct($args)
    {
    }

    public static function getInstance($name)
    {
        return self::$container[$name];
    }
}