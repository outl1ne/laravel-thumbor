<?php

namespace OptimistDigital\LaravelThumbor;

use OptimistDigital\LaravelThumbor\Mocked\Url\BuilderFactory as FakeBuilderFactory;
use Thumbor\Url\BuilderFactory;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor() {
        $url = config('thumbor.url');
        $key = config('thumbor.key');

        if ($url && $key) {
            return BuilderFactory::class;
        }
        return FakeBuilderFactory::class;
    }
}
