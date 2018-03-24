<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:55
 */

namespace designPattern\Creational\AbstractFactory\Json;

use \designPattern\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        // TODO: Implement render() method.
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}