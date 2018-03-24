<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 09:39
 */

namespace designPattern\Structural\Bridge;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});

$vehicle = new Car(new Produce(), new Assemble());
$vehicle->manufacture();