<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:44
 */

namespace designPattern\Structural\Decorator;


class RenderInXml extends Decorator
{
    public function renderData()
    {
        // TODO: Implement rederData() method.

        $output = $this->wrapped->renderData();

        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}