<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:56
 */

namespace designPattern\Structural\Composite;

abstract class FormElement
{
    abstract public function render($indent = 0);
}