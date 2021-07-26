<?php

namespace OptimistDigital\LaravelThumbor\Mocked\Url;

use OptimistDigital\LaravelThumbor\Mocked\Url;

class Builder
{
    private $original;

    public static function construct($original)
    {
        return new self($original);
    }

    public function __construct($original)
    {
        $this->original = $original;
    }

    public function __call($method, $args)
    {
        return $this;
    }

    public function build()
    {
        return new Url(
            $this->original
        );
    }

    public function __toString()
    {
        return (string) $this->build();
    }
}
