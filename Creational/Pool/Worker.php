<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 9:50
 */

namespace designPattern\Creational\Pool;


class Worker
{
    public function __construct()
    {

    }

    public function run($image, array $callback)
    {
        call_user_func($callback, $this);
    }
}