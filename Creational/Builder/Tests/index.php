<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:26
 */

use designPattern\Creational\Builder\Director;

spl_autoload_register(function($class) {
   require 'F:/web/' . $class . '.php';
});

$direct = new Director();
$product = $direct->build(new \designPattern\Creational\Builder\CarBuilder());
var_dump($product);