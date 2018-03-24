<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 10:26
 */

namespace designPattern\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}