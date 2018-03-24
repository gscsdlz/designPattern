<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:01
 */

namespace designPattern\Structural\Composite;


class TextElement extends FormElement
{
    public function render($indent = 0)
    {
        // TODO: Implement render() method.
        return str_repeat('  ', $indent) . 'this is a text element';
    }
}