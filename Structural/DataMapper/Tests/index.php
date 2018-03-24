<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 10:16
 */

namespace designPattern\Structural\DataMapper;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});
