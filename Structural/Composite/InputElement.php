<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:00
 */

namespace designPattern\Structural\Composite;


class InputElement extends FormElement
{
    public function render($indent = 0)
    {
        // TODO: Implement render() method.
        return str_repeat('  ', $indent) . '<input type="text" />';
    }
}