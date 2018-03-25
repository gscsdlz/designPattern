<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 09:37
 */

namespace designPattern\Structural\Facade;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});


FacadeContainer::init(require 'F:/web/' . __NAMESPACE__ . '/aliasConfig.php');

$res = DB::select("username", "password")
    ->from("user")
    ->where([
        ['username', 'root'],
        ['privilege', '!=', '1'],
    ])->get();
echo $res;