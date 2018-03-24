<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:52
 */

namespace designPattern\Creational\AbstractFactory;


abstract class Picture implements MediaInterface
{
    protected $path;

    protected $name;

    public function __construct($path, $name = '')
    {
        $this->path = (string) $path;
        $this->name = (string) $name;
    }
}