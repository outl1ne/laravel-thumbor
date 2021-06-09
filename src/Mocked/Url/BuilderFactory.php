<?php

namespace OptimistDigital\LaravelThumbor\Mocked\Url;

class BuilderFactory
{
    public static function construct()
    {
        return new self;
    }

    public function url($original)
    {
        return Builder::construct($original);
    }
}
