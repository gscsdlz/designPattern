<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:30
 */

namespace designPattern\Creational\Prototype;

spl_autoload_register(function ($class){
   require 'F:/web/' . $class . '.php';
});

$bar = new BarBookPrototype();
$foo = clone $bar;

var_dump($foo);