<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:40
 */

namespace designPattern\Structural\Decorator;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});

$ws = new WebService([ 'foo' => 'bar' ]);

$service = new RenderInXml($ws);
echo $service->renderData();

