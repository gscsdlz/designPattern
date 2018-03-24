<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:55
 */

namespace designPattern\Creational\AbstractFactory\Html;

use \designPattern\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        // TODO: Implement render() method.
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}