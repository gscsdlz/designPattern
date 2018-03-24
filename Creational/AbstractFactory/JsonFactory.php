<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:49
 */

namespace designPattern\Creational\AbstractFactory;


class JsonFactory extends AbstractFactory
{

    /**
     * @param $content
     * @return Text
     */
    public function createText($content)
    {
        // TODO: Implement createText() method.
        return new JSON\Text($content);
    }

    /**
     * @param $path
     * @param string $name
     * @return Picture
     */
    public function createPicture($path, $name = '')
    {
        // TODO: Implement createPicture() method.
        return new Json\Picture($path, $name);
    }
}