<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:54
 */

use designPattern\Creational\Builder\Director;

spl_autoload_register(function($class) {
    require 'F:/web/' . $class . '.php';
});

$factory = new \designPattern\Creational\FactoryMethod\GermanFactory();
$car = $factory->create(\designPattern\Creational\FactoryMethod\FactoryMethod::FAST);

var_dump($car);