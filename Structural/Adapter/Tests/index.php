<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/03/23
 * Time: 12:01
 */

namespace designPattern\Structual\Adapter;

use designPattern\Structural\Adapter\Book;
use designPattern\Structural\Adapter\EbookAdapter;
use designPattern\Structural\Adapter\Kindle;

spl_autoload_register(function ($class){
    require 'F:/web/' . $class . '.php';
});

$book = [];
$book[] = new Book();
$book[] = new EbookAdapter(new Kindle());

foreach ($book as $instance) {
    $instance->open();
    $instance->turnPage();
}