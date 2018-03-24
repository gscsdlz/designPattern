<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:55
 */

namespace designPattern\Creational\AbstractFactory\Html;

use \designPattern\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        // TODO: Implement render() method.
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}