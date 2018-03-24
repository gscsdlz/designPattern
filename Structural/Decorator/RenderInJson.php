<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:44
 */

namespace designPattern\Structural\Decorator;


class RenderInJson extends Decorator
{
    public function renderData()
    {
        // TODO: Implement rederData() method.

        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}