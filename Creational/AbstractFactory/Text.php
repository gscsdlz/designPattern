<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/22
 * Time: 9:52
 */

namespace designPattern\Creational\AbstractFactory;


abstract class Text implements MediaInterface
{
    protected $text;


    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}