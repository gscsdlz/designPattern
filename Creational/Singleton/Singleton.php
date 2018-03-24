<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:37
 */

namespace designPattern\Creational\Singleton;

class Singleton
{
    private static $instance;

    public static  function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    private function __construct()
    {
        echo "Create!!!\n";
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}