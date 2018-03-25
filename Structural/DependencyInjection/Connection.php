<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/25
 * Time: 9:28
 */

namespace designPattern\Structural\DependencyInjection;


class Connection
{
    protected $configuration;

    protected $host;

    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    public function connect()
    {
        $host = $this->configuration->get('host');

        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
    }
}