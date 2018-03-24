<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 11:12
 */

namespace designPattern\Creational\Builder;


interface BuilderInterface
{
    public function createVehicle();

    public function addDoors();

    public function addEngine();

    public function addWheel();

    public function getVehicle();
}