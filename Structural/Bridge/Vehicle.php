<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:43
 */

namespace designPattern\Structural\Bridge;


abstract class Vehicle
{
    protected $workShop1;
    protected $workShop2;

    protected function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        $this->workShop1 = $workshop1;
        $this->workShop2 = $workshop2;
    }

    public function manufacture()
    {

    }
}