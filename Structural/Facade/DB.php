<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 10:00
 */

namespace designPattern\Structural\Facade;


class DB extends Facade
{
    public static function getFacadeAccessor() {
        return 'db';
    }
}