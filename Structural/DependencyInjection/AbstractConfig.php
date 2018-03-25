<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:25
 */

namespace designPattern\Structural\DependencyInjection;


abstract class AbstractConfig
{
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}