<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 09:24
 */

namespace designPattern\Structural\DependencyInjection;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});

$src = "test";
$config = new ArrayConfig(['host' => $src]);

$connection = new Connection($config);
$connection->connect();
echo $connection->getHost();