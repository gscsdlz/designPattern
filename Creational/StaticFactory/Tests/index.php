<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 11:38
 */

spl_autoload_register(function($class) {
    require 'F:/web/' . $class . '.php';
});

$instance = \designPattern\Creational\StaticFactory\StaticFactory::factory('number');
var_dump($instance);

