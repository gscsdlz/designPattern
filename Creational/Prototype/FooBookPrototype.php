<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:29
 */

namespace designPattern\Creational\Prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';
    
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}