<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:43
 */

namespace designPattern\Structural\Decorator;


abstract  class Decorator implements RenderInterface
{
    protected $wrapped;

    public function __construct(RenderInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}