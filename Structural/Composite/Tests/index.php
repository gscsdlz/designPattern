<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 09:56
 */

namespace designPattern\Structural\Composite;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});


$form = new Form();
$form->addElement(new TextElement());
$form->addElement(new InputElement());

$embed = new Form();
$embed->addElement(new TextElement());
$embed->addElement(new InputElement());
$form->addElement($embed);

echo $form->render();