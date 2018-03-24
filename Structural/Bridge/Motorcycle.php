<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:45
 */

namespace designPattern\Structural\Bridge;


class Motorcycle extends Vehicle
{
    public function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        parent::__construct($workshop1, $workshop2);
    }

    public function manufacture()
    {
        echo __CLASS__;
        $this->workShop1->work();
        $this->workShop2->work();
    }
}