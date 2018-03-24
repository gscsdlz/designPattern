<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:41
 */

namespace designPattern\Structural\Bridge;


class Assemble implements Workshop
{
    public function work()
    {
        // TODO: Implement work() method.
        echo __CLASS__;
    }
}