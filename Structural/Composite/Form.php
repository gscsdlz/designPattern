<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:57
 */

namespace designPattern\Structural\Composite;


class Form extends FormElement
{
    protected $elements;

    public function render($indent = 0)
    {
        // TODO: Implement render() method.
        $formCode = '';

        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent + 1) . PHP_EOL;
        }

        return $formCode;
    }

    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}