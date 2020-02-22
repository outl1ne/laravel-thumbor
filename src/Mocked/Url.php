<?php

namespace OptimistDigital\LaravelThumbor\Mocked;

class Url
{
    private $original;

    public function __construct($original)
    {
        $this->original = $original;
    }

    public function stringify($original)
    {
        return $original;
    }

    public function __toString()
    {
        return $this->stringify(
            $this->original
        );
    }
}
