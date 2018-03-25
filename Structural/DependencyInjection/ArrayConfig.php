<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:26
 */

namespace designPattern\Structural\DependencyInjection;


class ArrayConfig extends AbstractConfig implements Parameters
{

    public function __construct($storage)
    {
        parent::__construct($storage);
    }

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }

        return $default;
    }

    public function set($key, $value)
    {
        // TODO: Implement set() method.
        $this->storage[$key] = $value;
    }
}