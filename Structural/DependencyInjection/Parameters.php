<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:26
 */

namespace designPattern\Structural\DependencyInjection;


interface Parameters
{
    public function get($key);

    public function set($key, $value);
}