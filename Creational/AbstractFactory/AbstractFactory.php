<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:43
 */

namespace designPattern\Creational\AbstractFactory;


abstract  class AbstractFactory
{
    /**
     * @param $content
     * @return Text
     */
    abstract public function createText($content);

    /**
     * @param $path
     * @param string $name
     * @return Picture
     */
    abstract public function createPicture($path, $name = '');
}