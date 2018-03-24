<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:41
 */

namespace designPattern\Structural\Decorator;

class WebService implements RenderInterface
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        // TODO: Implement rederData() method.
        return $this->data;
    }
}