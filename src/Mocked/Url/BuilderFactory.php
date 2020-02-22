<?php

namespace OptimistDigital\LaravelThumbor\Mocked\Url;

class BuilderFactory
{
    private $server;
    private $secret;

    public static function construct()
    {
        return new self;
    }

    public function __construct() {}

    public function url($original)
    {
        return Builder::construct($original);
    }
}
