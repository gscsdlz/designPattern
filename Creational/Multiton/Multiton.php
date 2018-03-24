<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 9:29
 */

namespace designPattern\Creational\Multiton;


class Multiton
{
    const INSTANCE_1 = '1';

    const INSTANCE_2 = '2';

    private static $instance = array();

    private function __construct()
    {

    }

    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$instance)) {
           self::$instance[$instanceName] = new self();
        }

        return self::$instance[$instanceName];
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}