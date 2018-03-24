<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:56
 */

spl_autoload_register(function($class) {
   require __DIR__ . '/../../../../' . $class . '.php';
});

$factory = new \designPattern\Creational\SimpleFactory\ConcreteFactory();
$bicycle = $factory->createVehicle('bicycle');
$scooter = $factory->createVehicle('others');

var_dump($bicycle);
var_dump($scooter);