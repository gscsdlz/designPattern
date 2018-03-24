<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 10:03
 */

use designPattern\Creational\AbstractFactory\HtmlFactory;

spl_autoload_register(function ($class) {
   require 'F:/web/' . $class .'.php';
});

$factory = new HtmlFactory();
$text = $factory->createText("index");
echo $text->render();